<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class StuClass extends ActiveRecord
{
    public static function tableName() {
        return 'class';
    }

    public static function getDb() {
        return Yii::$app->content_db;
    }
}