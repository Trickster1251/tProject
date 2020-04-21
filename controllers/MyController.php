<?php


namespace app\controllers;


class MyController extends AppController
{

    public $layout = 'basic';

    public function actionIndex($id = null)
    {

        return $this->render('index');
    }

    public function actionResume($id = null)
    {
        return $this->render('resume');
    }

    public function actionSkills($id = null)
    {
        return $this->render('skills');
    }

    public function actionWork($id = null)
    {
        return $this->render('work');
    }
}