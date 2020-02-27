<?php


namespace app\controllers\web;

use Yii;
use yii\web\Controller;

class BestClassController extends Controller
{
    public function actionRanking(){
        return $this->render('ranking');
    }
}