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
    <label>Ваше Имя: </label><br>
    <input type="text" name="name" placeholder="Имя"><br>
    <label>Ваш Возраст: </label><br>
    <input type="number" name="age" placeholder="Возраст"><br>
    <label>Ваш пол: </label><br>
    <input type="text" name="sex" placeholder="Пол"><br>
    <label>Напишите о себе: </label><br>
    <input type="text" name="discription" placeholder="Описание"><br>
    <input class="btn btn-large" type="submit" name="done"><br>
</form>
</body>
</html>
<?php
