<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/20
 * Time: 14:35
 */

namespace app\controllers\web;

use yii\web\Controller;

class IndexController extends BaseController
{
  public function actionIndex(){
    return $this->render('index');
  }

  public function actionTest(){
    echo "test";
  }
}