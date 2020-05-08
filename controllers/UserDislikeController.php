<?php


namespace app\controllers;

use app\models\Users;
use app\models\UsersSearch;


use yii\web\Controller;
use Yii;

class UserDislikeController extends Controller
{

    public function actionCreate()
    {
        $currentUser = 1;
        $userDislikeId = (int)$_POST["user_dislike_id"];

//        $sql = <<<SQL
//INSERT INTO users_like(users_id, user_like_id, reason) VALUES ($currentUser, $userLikeId,'')
//SQL;

        Yii::$app->db->createCommand()->insert('user_dislike', [
            'users_id'=> $currentUser,
            'user_dislike_id' => $userDislikeId,
        ])->execute();

        return $this->redirect(['user-show/index']);
    }
}