<?php

interface Vehicle{

    function Ino();

}

interface Boat extends Vehicle {
    function swim();
}


interface Car extends Vehicle {
    function car();
}


class MercedesAmf implements Car, Boat {

    function Car(){
        echo 'This a car';
    }

    function swim(){
        echo 'This a boat';
    }


    function ino(){
        echo 'This a boat';
    }
}

$mer = new MercedesAmf();
$mer->swim();
$mer->Car();
$mer->ino();

$a = [1,2,3,4];
print_r(array_reverse($a));
