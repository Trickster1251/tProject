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
        $currentUser = Yii::$app->getUser()->getId();
        $userLikeId = (int)$_POST["user_like_id"];


        Yii::$app->db->createCommand()->insert('users_like', [
            'users_id'=> $currentUser,
            'user_like_id' => $userLikeId,
            'reason' => '',
        ])->execute();
        return $this->redirect(['user-show/index']);

    }
}