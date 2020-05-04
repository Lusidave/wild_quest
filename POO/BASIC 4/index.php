<?php

require_once 'Vehicle.php';
require_once 'Car.php';

// Vehicles creation
$car = new Car('red', 4, 'fuel');

/**
 * Test
 */

try {
    $car->setParkBrake(15);
    echo $car->start();
} catch (Exception $e){
    print_r($e);
} finally {
    $car->setParkBrake(false);
    echo "<p> Exception trouvée ! On s'occupe de tout ! :) <p><br>" . $car->start();
}