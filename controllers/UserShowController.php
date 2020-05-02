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
SELECT user_like_id FROM users_like WHERE users_id = $currentUser
SQL;//Не выодит всех лайкнутых пользователей
        $ids = Yii::$app->db->createCommand($sql)->queryColumn();
//        print_r($ids);
        $ids[] = $currentUser; //Добавляет переменную currentUser в массив ids, чтобы пользователь не видел самого себя
        $idsCurrentUserLike = join(',', $ids);

        $sql = <<<SQL
SELECT id FROM users WHERE id NOT IN ($idsCurrentUserLike) LIMIT 1 
SQL;//Выводит список всех нелайкнутых пользоватлей
        $id = Yii::$app->db->createCommand($sql)->queryScalar();
        $user = $this->findModel($id);

        // mi pro eto govorili vchera
        // kogda vse polsaveteli likenuti to tut oshibka
        if ($user != null) {
            return $this->render('index', ['user' => $user]);

        } else {
            // i tutshablon sdelay kogda net svobodnih userov
            return $this->render("no-user");
        }
    }

//    public function actionDislike(){
//        $currentUser = 1;
//        $sql = <<<SQL
//INSERT INTO users_like VALUES ($currentUser, $id, '')
//SQL;//Вносит видимого пользователя в таблицу user_dislike
//        Yii::$app->db->createCommand($sql)->queryScalar();
//
//    }

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
        return null;
    }

}