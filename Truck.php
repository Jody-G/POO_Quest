<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockageLimit;
    private int $stockage = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockageLimit)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStockageLimit($stockageLimit);
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getStockageLimit(): int
    {
        return $this->stockageLimit;
    }

    public function setStockageLimit(int $stockageLimit): void
    {
        $this->stockageLimit = $stockageLimit;
    }

    public function getStockage(): int
    {
        return $this->stockage;
    }

    public function setStockage(int $stockage): void
    {
        $this->stockage = $stockage;
    }

    public function stockage(int $stockage)
    {
        $this->setStockage($this->getStockage() + $stockage);
        if ($this->getStockage() == 0){
            return "Le camion est vide";
        } elseif($this->getStockage() > 0 && $this->getStockage() < $this->stockageLimit) {
            return "Le camion est chargé";
        } elseif($this->getStockage() == $this->stockageLimit){
            return "Le camion est plein";
        } elseif ($this->getStockage() > $this->stockageLimit){
            return "Le camion est surchargé";
        } else {
            return "Error";
        }
    }
}