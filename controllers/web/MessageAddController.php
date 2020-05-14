<?php


namespace app\controllers\web;

use app\models\FileHelper;
use app\models\Grade;
use app\models\GradeAddSet;
use app\models\StuClass;
use app\models\Student;
use app\models\Test;
use Yii;
use yii\web\Controller;

class MessageAddController extends BaseController
{
    //德育分数
    public function actionCharacter(){
        $file_return_msg = '';
        $manually_return_msg = '';
        $number = Yii::$app->request->post('number','');
        $class = Yii::$app->request->post('class','');
        $name = Yii::$app->request->post('name','');
        $basic = Yii::$app->request->post('basic','');
        $hidden = Yii::$app->request->post('status');

        //文件导入
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',$item);
                    $grade = new Grade();
                    $grade->stu_id = $arr[0];
                    $grade->class = $arr[1];
                    $grade->name = $arr[2];
                    $grade->basic = $arr[3];
                    $grade->status = $hidden;
                    $grade->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }

        //手动输入
        if ($name && $basic && $number && $class){
            $grade = new Grade();
            $grade->stu_id = $number;
            $grade->class = $class;
            $grade->name = $name;
            $grade->basic = $basic;
            $grade->status = $hidden;
            $result = $grade->save();
            if ($result){
                $manually_return_msg = '录入成功';
            }else{
                $manually_return_msg = '录入失败';
            }
        }

        $out = [
            'file_return_msg' => $file_return_msg,
            'manually_return_msg' => $manually_return_msg,
        ];
        return $this->render('character',$out);
    }

    public function actionStudent(){
        $file_return_msg = "";
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',$item);
                    $student = new Student();
                    $student->stu_id = $arr[0];
                    $student->stu_name = $arr[1];
                    $student->stu_sex = $arr[2];
                    $student->stu_year = $arr[3];
                    $student->class = $arr[4];
                    $student->work = $arr[5];
                    $student->stu_class = $arr[6];
                    $student->bedroom = $arr[7];
                    $student->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }
        $out = [
            'return_msg' => $file_return_msg,
        ];
        return $this->render("student",$out);
    }

    public function actionClass(){
        $file_return_msg = "";
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',$item);
                    $class = new StuClass();
                    $class->college_id = $arr[0];
                    $class->college_name = $arr[1];
                    $class->major_id = $arr[2];
                    $class->major_name = $arr[3];
                    $class->class_id = $arr[4];
                    $class->class_name = $arr[5];
                    $class->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }
        $out = [
            'return_msg' => $file_return_msg,
        ];
        return $this->render("class",$out);
    }

    public function actionGradeAddSet(){
        $page = Yii::$app->request->get('page',1);
        $pagesize = 10;
        $offset = ($page - 1) * $pagesize;
        $cnt = GradeAddSet::find()->count();
        $all_page = ceil($cnt / $pagesize);
        if ($page > $all_page - 1){
            $page = $all_page - 1;
        }elseif($page < 1){
            $page = 1;
        }
        $data = GradeAddSet::find()->limit($pagesize)->offset($offset)->asArray()->all();
        $out = [
            'all_data' => $data,
            'page' => $page,
            'all_page' => ceil($cnt / $pagesize),
        ];
        return $this->render('grade-add-set',$out);
    }
    public function actionGradeAddSetAdd(){
        $params['type'] = Yii::$app->request->post('type');
        $params['reason'] = Yii::$app->request->post('reason');
        $params['grade'] = Yii::$app->request->post('grade');
        $params['id'] = Yii::$app->request->get('id',0);
        $params['check'] = Yii::$app->request->post('check',0);

        if ($params['id']){
            $nav_bar = GradeAddSet::getById($params['id']);
        }else{
            $nav_bar = new GradeAddSet();
        }

        if ($params['check']){
            $nav_bar->type = $params['type'];
            $nav_bar->reason = $params['reason'];
            $nav_bar->grade = $params['grade'];
            $nav_bar->year = date('Y');
            $result = $nav_bar->save();
            if ($result){
                $return_msg = '添加成功';
            }else{
                $return_msg = '添加失败，请咨询管理员!';
            }
        }else{
            $return_msg = '';
        }
        $data = GradeAddSet::find()->asArray()->all();
        $out = [
            'data' => $data,
            'msg' => $return_msg,
            'type' => $nav_bar->type,
            'reason' => $nav_bar->reason,
            'grade' => $nav_bar->grade,
            'id' => $nav_bar->id,
        ];
        return $this->render('grade-add-set-add',$out);
    }
}