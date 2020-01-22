<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/20
 * Time: 17:45
 */
namespace app\controllers\ctr;

use app\models\Test;
use Yii;
use yii\console\Controller;

class TestXuanController extends Controller
{
  public function actionTest(){
    $result = Test::find()
      ->select("*")
      ->asArray()
      ->all();
    print_r($result);
  }
}