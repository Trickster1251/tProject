<?php


namespace app\controllers;
use Yii;

class TestController extends AppController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest(){
        return $this->render ('test');

    }


}