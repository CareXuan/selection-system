<?php


namespace app\controllers\web;

use app\models\FileHelper;
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
                    $test = new Test();
                    $test->a = $arr[0];
                    $test->b = $arr[1];
                    $test->c = $arr[2];
                    $test->d = $arr[3];
                    $test->status = $hidden;
                    $test->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }

        //手动输入
        if ($name && $basic && $number && $class){
            $test = new Test();
            $test->a = $number;
            $test->b = $class;
            $test->c = $name;
            $test->d = $basic;
            $test->status = $hidden;
            $result = $test->save();
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
}