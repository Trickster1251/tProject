<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>
<body>
<form action="/user-register/create" method="post">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
    <div class="form-group">
        <label for="exampleInputEmail1" >Ваше Имя: </label><br>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Имя"><br>
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
        <input type="text" name="discription" class="form-control" placeholder="Описание"><br>
    </div>
    <input class="btn btn-large" type="submit" name="done"><br>



</form>
</body>
</html>
<?php
