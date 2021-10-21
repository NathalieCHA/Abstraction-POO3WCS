<?php

abstract class HighWay
{
    protected array $currentVehicules;
    protected int $nbLane;
    protected int $maxSpeed;

    public function getCurrentVehicules(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicules(array $currentVehicules): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(array $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(array $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicules(Vehicule $vehicules);

}