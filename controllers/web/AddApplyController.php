<?php


namespace app\controllers\web;

use app\models\GradeAdd;
use Yii;
use app\models\FileHelper;
use yii\web\Controller;

class AddApplyController extends Controller
{
    //德育加分申请
    public function actionCharacter(){
        $number = Yii::$app->request->post('number');
        $reason = Yii::$app->request->post('reason','');
        $class = Yii::$app->request->post('class');
        $msg = '';

        if ($number){

            $check_arr = ['png','jpg','gif','jpeg'];
            if (key_exists('pic',$_FILES)){
                $pic_online = FileHelper::uploadByForm('pic',$check_arr,'/var/www/html/check_pic/');
            }else{
                $pic_online = '';
            }

            $grade_add = new GradeAdd();
            $grade_add->stu_number = $number;
            $grade_add->reason = $reason;
            $grade_add->picture = $pic_online;
            $grade_add->class = $class;
            $grade_add->status = 0;
            $result = $grade_add->save();
            if ($result){
                $msg = '申请成功';
            }else{
                $msg = '申请失败，请重试';
            }
        }
        $out = [
            'msg' => $msg
        ];
        return $this->render('character',$out);
    }
}