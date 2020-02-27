<?php


namespace app\controllers\web;

use Yii;
use app\models\NavBar;
use yii\web\Controller;

class PrivilegeManagementController extends Controller
{
    public function actionIndex(){
        $all_data = NavBar::find()->asArray()->all();
        $out = [
            'all_data' => $all_data,
        ];
        return $this->render('index',$out);
    }

    public function actionAdd(){
        $params['first_tag'] = Yii::$app->request->post('first_tag');
        $params['second_tag'] = Yii::$app->request->post('second_tag');
        $params['url'] = Yii::$app->request->post('url');
        $params['nav_bar_id'] = Yii::$app->request->get('id',0);
        $params['check'] = Yii::$app->request->post('check',0);
        $return_first = 0;
        $return_second = '';
        $return_url = '';

        if ($params['nav_bar_id']){
            $nav_bar = NavBar::getById($params['nav_bar_id']);
            $return_first = $nav_bar->p_id;
            $return_second = $nav_bar->nav_bar_name;
            $return_url = $nav_bar->href;
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
            'first' => $return_first,
            'second' => $return_second,
            'url' => $return_url,
        ];
        return $this->render('add',$out);
    }
}