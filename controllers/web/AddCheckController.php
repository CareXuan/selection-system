<?php


namespace app\controllers\web;

use Yii;
use app\models\GradeAdd;
use yii\web\Controller;

class AddCheckController extends Controller
{
    //德育加分申请
    public function actionUnaudited(){
        $data = GradeAdd::find()->asArray()->all();
        $class_arr = [
            1 => '德育',
            2 => '智育',
            3 => '体育'
        ];

        $out = [
            'data' => $data,
            'class_arr' => $class_arr,
        ];
        return $this->render('unaudited',$out);
    }

    //德育加分审核
    public function actionCheck(){
        $id = Yii::$app->request->get('id');
        $arr = GradeAdd::getById($id);
        $out = [
            'data' => $arr,
        ];
        return $this->render('check',$out);
    }
}