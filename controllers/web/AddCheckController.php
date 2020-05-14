<?php


namespace app\controllers\web;

use Yii;
use app\models\GradeAdd;
use yii\web\Controller;

class AddCheckController extends BaseController
{
    //待审核
    public function actionUnaudited(){
        $data = GradeAdd::find()->where(['and',['=','status',0],['!=','class',100]])->orderBy('id desc')->asArray()->all();
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

    //已审核
    public function actionAudited(){
        $data = GradeAdd::find()->where(['in','status',[1,2]])->asArray()->all();
        $class_arr = [
            1 => '德育',
            2 => '智育',
            3 => '体育'
        ];

        $out = [
            'data' => $data,
            'class_arr' => $class_arr,
        ];
        return $this->render('audited',$out);
    }

    //审核
    public function actionCheck(){
        $id = Yii::$app->request->get('id');
        $arr = GradeAdd::getById($id);
        $out = [
            'data' => $arr,
        ];
        return $this->render('check',$out);
    }

    //加分状态
    public function actionCheckStatus(){
        $id = Yii::$app->request->get('id');
        $status = Yii::$app->request->get('status');
        $arr = GradeAdd::getById($id);
        if (in_array($status,[1,2])){
            $arr->status = $status;
            $arr->save();
        }
        $this->redirect('/add-check/unaudited');
    }
}