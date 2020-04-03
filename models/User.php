<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public static function getDb()
    {
        return Yii::$app->content_db;
    }

    public static function getByUserName($user_name){
        return self::find()->where(['user_name' => $user_name])->one();
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }
}