
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tinder</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/font/fontawesome-webfont.woff" type='text/css'>

</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="profile"><img src="/img/user.jpg"/></a>
            <ul class="nav nav-collapse ">
                <li><a style="font-size:14px" href="/user-show/profile" class="active"><i class="fa fa-user-circle-o"></i> Профиль</a></li>
                <li><a style="font-size:14px" href="/user-show/index"><i class="icon-trophy"></i> Главная</a></li>
                <li><a style="font-size:14px" href="/user-register/index"><i class="fa fa-sign-in"></i> Регистрация</a></li>
                <li><a style="font-size:14px" href="/user-login/index"><i class="fa fa-sign-in"></i> Вход</a></li>
            </ul>
            <div class="nav-collapse collapse">
            </div>
        </div>
    </div>
</div>

<?= $content ?>


<div class="footer">
    <div class="container">
        <p class="pull-right"><a href="https://vk.com/trxtr1251" target="_blank" role="button" data-toggle="modal"> <i class="icon-mail"></i>Связаться с нами</a></p>
    </div>
</div>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>
