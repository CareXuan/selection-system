<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class BestClassNecessary extends ActiveRecord
{
    public static function tableName()
    {
        return 'best_class_necessary';
    }

    public static function getDb()
    {
        return Yii::$app->content_db;
    }

    public static function getById($id){
        return self::find()->where(['id' => $id])->one();
    }
}