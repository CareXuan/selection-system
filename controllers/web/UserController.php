<?php


namespace app\controllers\web;

use app\models\User;
use Yii;
use yii\web\Controller;

class UserController extends BaseController
{
    public function actionLogin(){
        $user_name = Yii::$app->request->post('user_name','');
        $password = Yii::$app->request->post('password','');
        if ($user_name and $password){
            $result = User::find()->where(['and',['=','user_name',$user_name],['=','password',$password]])->all();
            if (count($result) > 0){
                $path = '/';
                $expire = time() + 86400;
                setcookie('user_name',isset($user_name) ? $user_name : null,$expire,$path);
                $this->godirect('/index');
            }
        }
        return $this->render('login');
    }

    public function actionLogout(){
        setcookie('user_name',null,time()-1,'/');
        $this->godirect('/index');
    }
}