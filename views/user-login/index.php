<form action="/user-login/login" method="post">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
    <div class="form-group">
        <label>Ваш логин: </label><br>
        <input type="text" name="login" class="form-control" placeholder="Логин"><br>
    </div>
    <div class="form-group">
        <label>Ваш пароль: </label><br>
        <input type="password" name="password" class="form-control" placeholder="Пароль"><br>
    </div>
    <input class="btn btn-large" type="submit" name="done"><br>
</form>