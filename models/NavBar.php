<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class NavBar extends ActiveRecord
{
    public static function tableName()
    {
        return 'nav_bar';
    }

    public static function getDb()
    {
        return Yii::$app->content_db;
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }
}