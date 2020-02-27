<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/20
 * Time: 17:45
 */
namespace app\controllers\ctr;

use app\models\NavBar;
use app\models\Test;
use Yii;
use yii\console\Controller;

class TestXuanController extends Controller
{
  public function actionTest(){
      $arr = NavBar::find()->where(['p_id' => 0])->asArray()->all();
      print_r($arr);
  }

  public function actionDb(){
      print_r(NavBar::find()->where(['p_id' => 0])->asArray()->all());
  }
}