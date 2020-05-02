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

//        $sql = <<<SQL
//INSERT INTO users_like(users_id, user_like_id, reason) VALUES ($currentUser, $userLikeId,'')
//SQL;

        Yii::$app->db->createCommand()->insert('users_like', [
            'users_id'=> $currentUser,
            'user_like_id' => $userLikeId,
            'reason' => '',
        ])->execute();
        return $this->redirect(['user-show/index']);

    }
}