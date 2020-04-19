<?php

$students = array(
    array('name' => 'Viktor', 'app' => '92'),
    array('name' => 'Vitor', 'app' => '912'),
    array('name' => 'Aleks', 'app' => '12')
);

for($i = 0; $i < count($students); $i++){

    echo $i;
    echo $students[$i]['name'].' ';
    echo $students[$i]['app'].'<br>';
};

foreach($students as $i => $value){
    echo $value['name'].' ';
};

echo '<br>';
for ($i=1; $i <= 50; $i++){
    if (($i % 2) == 0){
        echo $i.' ';
    }
}

echo '<br>';

while($i<100){
    $i = $i*$i;
    echo $i;

}



?>