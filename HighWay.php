<?php

abstract class HighWay
{
    protected string $currentVehicle;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicle()
    {
        return $this->currenVehicle;
    }

    public function setCurrentVehicle(array $currenVehicle): void
    {
        $this->currenVehicle = $currenVehicle;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($currentVehicle);

}
