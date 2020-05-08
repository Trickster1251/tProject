<?php


namespace app\controllers;


use app\models\LoginForm;
use Yii;
use yii\web\Controller;
use yii\web\IdentityInterface;
use yii\web\Response;

class AuthController extends Controller
{
    public function actionLogin()
    {
        var_dump(Yii::$app->user); die;
        $this-> layout = 'basic';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()

    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public static function findIdentity($id)
    {
        // TODO: Implement findIdentity() method.
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }


    public function validateAuthKey($authKey)
    {

    }

    public function actionTest(){
        die('123');
    }
}