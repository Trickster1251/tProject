<div class="container profile">
    <div class="span3"><img src="/img/mini.png"></div>
    <div class="span5">
        <h1><?= $user->name ?></h1>
        <h4><?= $user->age . ' лет' ?> </h4>
        <p><?= $user->discription ?> </p>

        <form action="/user-like/create" method="post">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                   value="<?= Yii::$app->request->getCsrfToken() ?>"/>
            <input type="hidden" name="user_like_id" value="<?= $user->id ?>">
            <input class="btn btn-large" type="submit" value="Нравится"><br>
        </form>
        <form action="/user-dislike/create" method="post">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                   value="<?= Yii::$app->request->getCsrfToken() ?>"/>
            <input type="hidden" name="user_dislike_id" value="<?= $user->id ?>">
            <input class="btn btn-large btn-danger" type="submit" value="Не судьба!"><br>
        </form>

    </div>

</div>

