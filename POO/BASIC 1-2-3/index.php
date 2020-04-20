<?php

require_once 'Bicycle.php';
require_once 'car.php';
require_once 'Vehicle.php';
require_once  'Truck.php';
var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck(50, 'red', 3, 'fuel');
echo $truck->setLoading(150);
echo $truck->forward();
echo $truck->load();
var_dump($truck);