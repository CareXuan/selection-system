<?php


namespace app\controllers\web;

use Yii;
use app\models\Admin;
use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $ignore_list = [
            'login',
        ];

        if (!Admin::isLogin()){
            if (!in_array(Yii::$app->controller->action->id,$ignore_list)){
                $this->godirect('/user/login');
            }
        }else{
            if (!Admin::checkAuthority($_COOKIE['user_name'])){
                if (Yii::$app->controller->route != 'web/index/index'){
                    $this->godirect('/index');
                }
            }
        }

        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function godirect($url) {
        //header("Location: $url");
        echo "<script>location.href='".$url."'</script>";
        exit;
    }
}