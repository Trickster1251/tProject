<form action="/user-register/create" method="post">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
    <div class="form-group">
        <label>Ваш логин: </label><br>
        <input type="text" name="login" class="form-control" placeholder="Логин"><br>
    </div>
    <div class="form-group">
        <label>Ваш пароль: </label><br>
        <input type="password" name="password" class="form-control" placeholder="Пароль"><br>
    </div>
    <div class="form-group">
        <label>Ваше Имя: </label><br>
        <input type="text" name="name" class="form-control" placeholder="Имя"><br>
    </div>
    <div class="form-group">
        <label>Ваш Возраст: </label><br>
        <input type="number" name="age" class="form-control" placeholder="Возраст"><br>
    </div>
    <div class="form-group">
        <label>Ваш пол: </label><br>
        <input type="text" name="sex" class="form-control" placeholder="Пол"><br>
    </div>
    <div class="form-group">
        <label>Напишите о себе: </label><br>
        <input type="text" name="description" class="form-control" placeholder="Описание"><br>
    </div>
    <input class="btn btn-large" type="submit" name="done"><br>


</form>
