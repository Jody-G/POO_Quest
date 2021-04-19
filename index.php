<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('green', 4, 'electric');
$truck = new Truck('red', 6, 'gazol', 10);

var_dump($car, $truck);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->forward();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->stockage(0);