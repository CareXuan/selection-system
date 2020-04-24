<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Student extends ActiveRecord
{
    public static function tableName() {
        return 'student';
    }

    public static function getDb() {
        return Yii::$app->content_db;
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }
}