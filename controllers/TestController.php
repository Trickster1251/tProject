<?php


namespace app\controllers;

use app\models\BallBet;
use app\models\BallInterface;
use app\models\BallRez;
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

    private function otskok(BallInterface $bal)
    {
        echo "Характеристика мяча: " . $bal->howRess().'<br>';
    }


    public function actionTest()
    {
        $ballrez = new BallRez();
        $ballbet = new BallBet();
        $this->otskok($ballrez);
       $this->otskok($ballbet);
    }



}