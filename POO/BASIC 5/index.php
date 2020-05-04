<?php

require_once ("LightableInterface.php");
require ("./Car.php");
require_once ("Bike.php");

$car = new Car('red', 4, 'fuel');


$car->switchOn();
var_dump($car);
$car->switchOff();
var_dump($car);

$bike = new Bicycle('blue', 2);

$bike->switchOff();
var_dump($bike);
$bike->forward();
$bike->switchOn();
var_dump($bike);