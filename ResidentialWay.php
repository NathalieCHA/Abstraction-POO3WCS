<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicules(Vehicule $vehicules): void 
    {
        if($vehicule instanceof Vehicule)
        {
        $this->setCurrentVehicule($vehicule);
        }}
}