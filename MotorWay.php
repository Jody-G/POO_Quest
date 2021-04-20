<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($currentVehicle){
        if($currentVehicle == "Car" || $currentVehicle == "Moto"){
            return "Acces autorisé";
        } else {
            return "Acces refusé";
        }
    }
}
