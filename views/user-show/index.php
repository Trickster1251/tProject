    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>SKILLS | Flat Design Mini Portfolio</title>
    </head>
    <body>
    <div class="container profile">
        <div class="span3"> <img src="/img/mini.png"> </div>
        <div class="span5">
            <h1><?= $user->name?></h1>
            <h4><?= $user->age, ' years old' ?> </h4>
            <p><?=$user->discription ?> </p>
            <a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a> </div>
    </div>
    </body>
    </html>
