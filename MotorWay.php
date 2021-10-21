<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;


    public function addVehicle(Vehicule $vehicule): void
    {
        if($vehicule instanceof Car){
             $this->setCurrentVehicule($vehicule);
    }
    }

}