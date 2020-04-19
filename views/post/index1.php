<?php

abstract class Vehicle {


    const CALORIES_PER_HOUR = 500;

    public $brand;
    public $speed;
    public $color;
    public $type;


    public function __construct ($brand, $speed, $color, $type){


        $this->brand = $brand;
        $this->speed = $speed;
        $this->color = $color;
        $this->type = $type;
    }

    public function getInfo(){
        return $this->brand . PHP_EOL . $this->speed . PHP_EOL . $this->color . PHP_EOL . $this->type;
    }

    public function tripTime($distance) {
        return $this->speed / $distance;
    }
}


class Bycicle extends Vehicle {

    public $a = 'A';
    protected $b = 'B';
    private $c = 'C';

    public function caloriesBurn($distance){
        return $this->tripTime($distance) * self::CALORIES_PER_HOUR;
    }



}

$b = new Bycicle('Jordan', 10, 'White', 1);
echo '<br>Info: '.$b->getInfo();
echo '<br>Trip time: '.$b->tripTime(1000);
echo '<br>CaloriesButn: '.$b->caloriesBurn(800);


class students
{

    public $name;
    public $result;

    function __construnct($name, array $result)
    {
        $this->name = $name;
        $this->result = $result;

        echo 'Student ' . $name . '<br>';
        foreach ($result as $subject => $item) {
            echo $subject . ': ' . $item;
        }
        echo '<hr>';
    }
}

$students1 = New students ('John', array('math' => 6, 'eng' => 7));
$students2 = New students ('John', array('math' => 7, 'eng' => 0));


?>