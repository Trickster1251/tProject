<?php


require_once '../views/my/Order.php';
require_once '../views/post/Order.php';

$gleb = new \My\Order();
$lesha = new \Post\Order();

echo $gleb->hi();
echo '<br>';
echo $lesha->hi();

