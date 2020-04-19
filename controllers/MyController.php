<?php


namespace app\controllers;


class MyController extends AppController
{

    public $layout = 'basic';

    public function actionIndex($id = null)
    {

        $hi = 123;
        $name = ['Ivanov', 'Petrov', 'Sidorov'];

        return $this->render('index', compact('hi', 'name', 'id'));
    }

    public function actionAbout($id = null)
    {
        return $this->render('about');
    }
}