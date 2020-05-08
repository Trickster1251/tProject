<?php


namespace app\controllers;

use app\models\Users;
use Yii;
use yii\web\Controller;

class UserRegisterController extends Controller
{

    public $layout = 'basic';

    public function actionIndex()
    {
        if (!Yii::$app->getUser()->getIsGuest()) {
            return $this->redirect(['user-show/index']);
        }
        return $this->render('index');
    }

    public function actionCreate()
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $description = $_POST['description'];
        $sex = $_POST['sex'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $passwordBcrypt = Yii::$app->getSecurity()->generatePasswordHash($password);
        $user = new Users();
        $user->name = $name;
        $user->age = $age;
        $user->description = $description;
        $user->sex = $sex;
        $user->login = $login;
        $user->password = $passwordBcrypt;

        $user->save();
        Yii::$app->user->login($user);
        return $this->redirect(['user-show/index']);
    }
}