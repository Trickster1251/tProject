<?php


namespace app\controllers;

use app\models\Users;
use app\models\UsersSearch;


use yii\web\Controller;
use Yii;

class UserLikeController extends Controller
{

    public function actionCreate()
    {
        $currentUser = 1;
        $userLikeId = (int)$_POST["user_like_id"];
        // Вносит видимого пользователя в таблицу user_like
        $sql = <<<SQL
INSERT INTO users_like(users_id, user_like_id) VALUES ($currentUser, $userLikeId)
SQL;

        // tut queryScalar ne nushen skoree vsego i lishniy
        // kommeni privikay sverhu pisat pls, eto pravilno ok
        Yii::$app->db->createCommand($sql)->queryOne();
    }
}