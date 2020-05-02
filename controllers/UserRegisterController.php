<?php


namespace app\controllers;

use app\models\Users;
use yii\web\Controller;

class UserRegisterController extends Controller
{

    public $layout = 'basic';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
//        $discription = $_POST['discription'];
        $sex = $_POST['sex'];

        $user = new Users();
        $user->name = $name;
        $user->age = $age;
//        $user->discription = $discription;
        $user->sex = $sex;
        $user->save();

        var_dump('Создание пользователя : '.$user->id.'<br>'.'Имя : '.$user->name);
    }
}