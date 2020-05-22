<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Authority extends ActiveRecord
{
    public static function tableName()
    {
        return 'authority';
    }

    public static function getDb()
    {
        return Yii::$app->content_db;
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }

    public static function getByRoleId($role_id){
        return self::find()->where(['role_id' => $role_id])->asArray()->all();
    }

    public static function createOne($role_id,$nav_id){
        $authority = new self();
        $authority->role_id = $role_id;
        $authority->nav_id = $nav_id;
        $result = $authority->save();
        return $result;
    }

    public static function deleteById($role_id){
        return self::deleteAll(['role_id' => $role_id]);
    }
}