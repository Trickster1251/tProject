<?php

namespace app\controllers;


class AppController extends \yii\base\Controller{
    public function debug ($arr){
        echo '<pre>' . print_r ($arr, true) . '</pre>';
}


}