<?php
require_once 'Vehicle.php';

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

require_once 'HighWay.php';

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentWay.php';


$car = new Car('green', 4, 'electric');
$truck = new Truck('red', 6, 'gazol', 10);
$truck2 = new Truck('blue', 8, 'gazol', 20);

$motorway = new MotorWay(4, 130);
$pedestrianway = new PedestrianWay(1, 10);
$residentway = new ResidentWay(2, 50);

var_dump($motorway, $pedestrianway, $residentway);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->forward();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

//Insérer une valeur de stockage
echo $truck->stockage(11).'<br>'; 
echo $truck2->stockage(20).'<br>';
echo '<br>';

//Dire si c'est une Moto, une Voiture, un Camion, etc...
echo $motorway->addVehicle("Moto"). '<br>';
echo $pedestrianway->addVehicle("Bike"). '<br>';
echo $residentway->addVehicle("Tank"). '<br>';
