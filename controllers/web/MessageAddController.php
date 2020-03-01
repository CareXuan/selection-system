<?php


namespace app\controllers\web;

use app\models\FileHelper;
use app\models\Test;
use Yii;
use yii\web\Controller;

class MessageAddController extends Controller
{
    //德育分数
    public function actionCharacter(){
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            $content = FileHelper::getContent($file_name);
            foreach ($content as $item){
                $arr = explode(',',$item);
                $test = new Test();
                $test->a = $arr[0];
                $test->b = $arr[1];
                $test->c = $arr[2];
                $test->d = $arr[3];
                $test->save();
            }
        }
        return $this->render('character');
    }
}