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
        $currentUser = Yii::$app->getUser()->getId();

        $sql = <<<SQL
SELECT user_like_id FROM users_like WHERE users_id = $currentUser
SQL;
        $idsLike = Yii::$app->db->createCommand($sql)->queryColumn();

        $sql = <<<SQL
SELECT user_dislike_id FROM user_dislike WHERE users_id = $currentUser
SQL;
        $idsDislike = Yii::$app->db->createCommand($sql)->queryColumn();
        $ids = array_merge($idsLike, $idsDislike);
        $ids[] = $currentUser; //Добавляет переменную currentUser в массив ids, чтобы пользователь не видел самого себя
        $idsCurrentUserLikeDislike = join(',', $ids);//?

        $sql = <<<SQL
SELECT id FROM users WHERE id NOT IN ($idsCurrentUserLikeDislike) LIMIT 1 
SQL;//Выводит список всех нелайкнутых пользоватлей
        $id = Yii::$app->db->createCommand($sql)->queryScalar();
        $user = $this->findModel($id);

        if ($user != null) {
            return $this->render('index', ['user' => $user]);
        } else {
            return $this->render("no-user");
        }
    }

    public function actionResume()
    {
        return $this->render('resume');
    }

    public function actionProfile()
    {
        $user = $this->findModel(1);
        return $this->render('profile', ['user' => $user]);
    }

    protected function findModel($id)
    {
        $model = Users::findOne($id);
        if ($model !== null) {
            return $model;
        }

        return null;
    }

}