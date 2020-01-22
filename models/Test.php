<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/22
 * Time: 16:03
 */

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Test extends ActiveRecord
{
  public static function tableName() {
    return 'test';
  }

  public static function getDb() {
    return Yii::$app->content_db;
  }

}