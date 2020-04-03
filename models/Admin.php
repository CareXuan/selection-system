<?php


namespace app\models;

use Yii;

class Admin
{
    public static function isLogin(){
        return empty($_COOKIE['user_name']) ? '' : $_COOKIE['user_name'];
    }

    public static function checkAuthority($user_name){
        $check_data = [];
        $href_data = [];
        $user_data = User::getByUserName($user_name);
        $role_id = $user_data['role_id'];
        $authority_sql = "select authority.role_id,nav_bar.href from authority JOIN nav_bar ON authority.nav_id=nav_bar.id where authority.role_id = {$role_id}";
        $authority_data = Authority::getDb()->createCommand($authority_sql)->queryAll();

        $content_action = str_replace('web','',Yii::$app->controller->id).'/'.Yii::$app->controller->action->id;

        $nav_bar = NavBar::find()->where(['!=','href',''])->asArray()->all();
        foreach ($nav_bar as $nav_item){
            $href_data[] = $nav_item['href'];
        }

        foreach ($authority_data as $authority_item){
            $check_data[] = $authority_item['href'];
        }
        if (!in_array($content_action,$check_data) and in_array($content_action,$href_data)){
            echo "<script>alert('您无权访问此功能');</script>";
            return false;
        }else{
            return true;
        }
    }
}