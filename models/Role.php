<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Role extends ActiveRecord
{
    public static function tableName()
    {
        return 'role';
    }

    public static function getDb()
    {
        return Yii::$app->content_db;
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }

    public static function getByRoleName($role_name){
        return self::find()->where(['role_name' => $role_name])->one();
    }
}