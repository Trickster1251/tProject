<h1>Shit</h1>
<?php
//$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\yii\web\YiiAsset'])
$this->registerJs("$(\'.wrap\').append(\'<h1>About!!!</h1>\')");
?>