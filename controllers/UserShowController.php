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

    public function actionIndex()
    {
        $currentUser = 1;

        $sql = <<<SQL
SELECT user_like_id FROM users_like WHERE users_id = $currentUser;
SQL;
        $ids = Yii::$app->db->createCommand($sql)->queryColumn();
        $ids[] = $currentUser; //Добавляет переменную currentUser в массив ids, чтобы пользователь не видел самого себя
        $idsCurrentUserLike = join(',', $ids);


        $sql = <<<SQL
SELECT id FROM users WHERE id NOT IN ($idsCurrentUserLike);
SQL;
        $id = Yii::$app->db->createCommand($sql)->queryScalar();
        $user = $this->findModel($id);
        return $this->render('index', ['user' => $user]);

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

    public function actionProfile()
    {
        $user = $this->findModel(1);
        return $this->render('profile', ['user' => $user]);
    }

    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}