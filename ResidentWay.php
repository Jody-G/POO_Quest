<?php

require_once 'HighWay.php';

final class ResidentWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($currentVehicle){
        return "Acces autorisé";
    }
}
