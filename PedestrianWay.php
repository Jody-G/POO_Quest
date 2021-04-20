<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($currentVehicle){
        if($currentVehicle == "Bike" || $currentVehicle == "Skateboard"){
            return "Acces autorisé";
        } else {
            return "Acces refusé";
        }
    }
}
