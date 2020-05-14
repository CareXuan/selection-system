<?php


namespace app\controllers\web;

use app\models\BestClassNecessary;
use Yii;
use yii\web\Controller;

class BestClassController extends BaseController
{
    public function actionSingle(){
        $out = [
            'year' => date('Y'),
        ];
        return $this->render('single',$out);
    }

    public function actionClass(){
        $out = [
            'year' => date('Y'),
        ];
        return $this->render('class',$out);
    }
}