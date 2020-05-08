<?php


namespace app\controllers;

use app\models\Users;
use Yii;
use yii\web\Controller;

class UserLoginController extends Controller
{
    public $layout = 'basic';

    public function actionIndex()
    {
        if (!Yii::$app->getUser()->getIsGuest()) {
            return $this->redirect(['user-show/index']);
        }
        return $this->render('index');
    }

    public function actionLogin()
    {

        if (!Yii::$app->getUser()->getIsGuest()) {
            return $this->redirect(['user-show/index']);
        }
        $login = Yii::$app->request->post()['login'];
        $password = Yii::$app->request->post()['password'];


        $sql = <<<SQL
SELECT id, password FROM users WHERE login = "$login";
SQL;
        $userData = Yii::$app->db->createCommand($sql)->queryAll();
        $userPassword = $userData[0]['password'];
        $userAuth = Yii::$app->getSecurity()->validatePassword($password, $userPassword);
        if ($userAuth) {
            $user = Users::findOne($userData[0]['id']);
            Yii::$app->getUser()->login($user);
            return $this->redirect(['user-show/index']);
        }
        return $this->redirect(['user-login/index']);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['user-login/index']);
    }

}