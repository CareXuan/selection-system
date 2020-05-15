<?php


namespace app\controllers\web;

use app\models\Authority;
use app\models\Role;
use app\models\User;
use Yii;
use app\models\NavBar;
use yii\web\Controller;

class PrivilegeManagementController extends BaseController
{
    public function actionIndex(){
        $page = Yii::$app->request->get('page',1);
        $pagesize = 10;
        $offset = ($page - 1) * $pagesize;
        $cnt = NavBar::find()->count();
        $all_page = ceil($cnt / $pagesize);
        if ($page > $all_page - 1){
            $page = $all_page - 1;
        }elseif($page < 1){
            $page = 1;
        }
        $all_data = NavBar::find()->limit($pagesize)->offset($offset)->asArray()->all();
        $out = [
            'all_data' => $all_data,
            'page' => $page,
            'all_page' => ceil($cnt / $pagesize),
        ];
        return $this->render('index',$out);
    }

    public function actionAdd(){
        $params['first_tag'] = Yii::$app->request->post('first_tag');
        $params['second_tag'] = Yii::$app->request->post('second_tag');
        $params['url'] = Yii::$app->request->post('url');
        $params['nav_bar_id'] = Yii::$app->request->get('id',0);
        $params['check'] = Yii::$app->request->post('check',0);

        if ($params['nav_bar_id']){
            $nav_bar = NavBar::getById($params['nav_bar_id']);
        }else{
            $nav_bar = new NavBar();
        }

        if ($params['check']){
            if (empty($params['second_tag'])){
                $return_msg = '请输入标签名';
            }else{
                $nav_bar->p_id = $params['first_tag'];
                $nav_bar->nav_bar_name = $params['second_tag'];
                $nav_bar->href = $params['url'];
                $result = $nav_bar->save();
                if ($result){
                    $return_msg = '添加成功';
                }else{
                    $return_msg = '添加失败，请咨询管理员!';
                }
            }
        }else{
            $return_msg = '';
        }
        $data = NavBar::find()->where(['p_id' => 0])->asArray()->all();
        $out = [
            'data' => $data,
            'msg' => $return_msg,
            'first' => $nav_bar->p_id,
            'second' => $nav_bar->nav_bar_name,
            'url' => $nav_bar->href,
            'id' => $nav_bar->id,
        ];
        return $this->render('add',$out);
    }

    public function actionDelete(){
        $params['nav_bar_id'] = Yii::$app->request->get('id',0);
        NavBar::deleteAll(['id' => $params['nav_bar_id']]);
        echo "<script>alert('删除选项卡成功');window.history.back(-1);</script>";
    }

    public function actionRole(){
        $data = Role::find()->asArray()->all();
        $out = [
            'data' => $data,
        ];
        return $this->render('role',$out);
    }

    public function actionAddRole(){
        $msg = '';
        $return_data = [];
        $role_id = Yii::$app->request->get('id',0);

        $data = Yii::$app->request->post();
        if (key_exists('role_name',$data)){
            $role_name = $data['role_name'];

            $role = Role::getById($role_id);
            if ($role){
                $role_id = $role['id'];
                $role->role_name = $data['role_name'];
                $role->role_status = $data['role_status'];
                $role->save();
                Authority::deleteById($role_id);
            }else {
                $rr = new Role();
                $rr->role_name = $role_name;
                $rr->role_status = $data['role_status'];
                $rr->save();
                $role_id = Role::getByRoleName($role_name)->id;
            }

            foreach ($data as $key => $value){
                if ($key != 'role_name' and $key != 'role_status'){
                    Authority::createOne($role_id,$value);
                }
            }
        }

        $role = Role::getById($role_id);

        $modular = NavBar::find()->where(['p_id' => 0])->asArray()->all();
        foreach ($modular as $item){
            $data = NavBar::find()->where(['p_id' => $item['id']])->asArray()->all();
            $return_data[$item['nav_bar_name']] = [];
            $k = 0;
            foreach ($data as $val){
                $return_data[$item['nav_bar_name']][$k]['name'] = $val['nav_bar_name'];
                $return_data[$item['nav_bar_name']][$k]['id'] = $val['id'];
                $return_data[$item['nav_bar_name']][$k]['p_id'] = $val['p_id'];
                $return_data[$item['nav_bar_name']][$k]['href'] = $val['href'];
                $k++;
            }
        }
        $out = [
            'msg' => $msg,
            'data' => $return_data,
            'role' => $role,
        ];
        return $this->render('add-role',$out);
    }

    public function actionDelRole(){
        $role_id = Yii::$app->request->get('id',0);
        $result = Role::deleteAll(['id' => $role_id]);
        if ($result){
            echo "<script>alert('删除成功')</script>";
        }else{
            echo "<script>alert('删除失败')</script>";
        }
        echo "<script>self.location=document.referrer;</script>";
    }

    public function actionUser(){
        $ddd = [];
        $return_data = [];
        $data = User::find()->asArray()->all();
        $role_data = Role::find()->asArray()->all();
        foreach ($role_data as $role_item){
            $ddd[$role_item['id']] = $role_item['role_name'];
        }
        foreach ($data as $item){
            $return_data[$item['id']]['id'] = $item['id'];
            $return_data[$item['id']]['user_name'] = $item['user_name'];
            $return_data[$item['id']]['role_name'] = $ddd[$item['role_id']];
        }
        $out = [
          'data' => $return_data,
        ];
        return $this->render('user',$out);
    }

    public function actionAddUser(){
        $msg = '';
        $user_id = Yii::$app->request->get('id',0);
        $user_name = Yii::$app->request->post('user_name');
        $password = Yii::$app->request->post('password');
        $role_id = Yii::$app->request->post('role');

        if ($user_id){
            $user_save = User::getById($user_id);
            if (!$user_save){
                $user_save = new User();
            }
        }else{
            $user_save = new User();
        }

        if ($user_name and $password and $role_id){
            $user_save->user_name = $user_name;
            $user_save->password = $password;
            $user_save->role_id = $role_id;
            $result = $user_save->save();
            if ($result){
                $msg = '添加成功';
            }else{
                $msg = '添加失败';
            }
        }

        $role_data = Role::find()->where(['=','role_status',1])->asArray()->all();
        $out = [
            'msg' => $msg,
            'user' => $user_save,
            'role_data' => $role_data,
        ];
        return $this->render('add-user',$out);
    }

    public function actionDelUser(){
        $user_id = Yii::$app->request->get('id',0);
        $result = User::deleteAll(['id' => $user_id]);
        if ($result){
            echo "<script>alert('删除成功')</script>";
        }else{
            echo "<script>alert('删除失败')</script>";
        }
        echo "<script>self.location=document.referrer;</script>";
    }

    public function actionGradeCalculation(){
        return $this->render('grade-calculation');
    }
}