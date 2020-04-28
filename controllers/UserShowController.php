<?php

namespace app\controllers;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;

class UserShowController extends Controller
{

    public $layout = 'basic';

    public function actionWork()
    {
        return $this->render('work');
    }

    public function actionSkills()
    {
        return $this->render('skills');
    }

    public function actionResume()
    {
        return $this->render('resume');
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionView2()
    {
        $user = $this->findModel(1);
        return $this->render('view2', ['user' => $user]);
    }

    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}