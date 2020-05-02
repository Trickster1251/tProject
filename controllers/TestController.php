<?php


namespace app\controllers;

use app\models\IddInterface;
use app\models\UserTest;
use Yii;

class TestController extends AppController
{
    private function login(IddInterface $idd)
    {
        $idd->login($idd->name);
    }

    public function actionIndex()
    {
        $id = 1;
        $model = UserTest::findOne($id);

        $model->name;
        $this->login($model);


    }

    public function actionTest()
    {
        return $this->render('test');

    }


}