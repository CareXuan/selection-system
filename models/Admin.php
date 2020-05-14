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

    function get_client_ip() {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
            foreach ($matches[0] AS $xip) {
                if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
                    $ip = $xip;
                    break;
                }
            }
        }
        return $ip;
    }
}