<?php


namespace app\controllers\web;

use Yii;
use yii\web\Controller;

class SystemManagementController extends Controller
{
    public function actionStudentAdmin(){
        return $this->render("student-admin");
    }

    public function actionClassAdmin(){
        return $this->render("class-admin");
    }

    public function actionCadreAdmin(){
        return $this->render('cadre-admin');
    }
}