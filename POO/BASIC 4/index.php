<?php

require_once 'Vehicle.php';
require_once 'Car.php';

$car = new Car('red', 4, 'fuel');


try {
    $car->setParkBrake(15);
    echo $car->start();
} catch (Exception $e){
    print_r($e);
} finally {
    $car->setParkBrake(false);
    echo "<p> Exception trouvée ! On s'occupe de tout ! :) <p><br>" . $car->start();
}