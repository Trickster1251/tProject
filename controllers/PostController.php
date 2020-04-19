<?php


namespace app\controllers;
use Yii;

class PostController extends AppController
{

    public function actionIndex(){

        return $this->render ('index');
    }

    public function actionIndex1(){

        return $this->render ('index1');
    }

    public function actionPromo(){

        return $this->render ('Promo');
    }

    public function action1(){

        return $this->render ('1');
    }
}
