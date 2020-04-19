<?php

use app\models\Users;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

//@var $this yii\web\View
//@var $model app\models\Users

$this->title = $model->name;
$like = 0;

\yii\web\YiiAsset::register($this);
?>
<!--<form action="mailto:trickster1251@gmail.com" enctype="text/plain">-->
<!--    <p><input type="submit" value="Написать письмо"></p>-->
<!--</form>-->

<div class="users_show-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::img('logo.png', ['alt' => 'Наш логотип']) ?>

        <?= Html::a('Лайк', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);?>

        <?= Html::a('Не судьба!', ['view', 'id' => $model->id], ['class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Дейстительно настолько стремный?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'age',
        ],
    ])
    ?>

</div>
