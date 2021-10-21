<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicules(Vehicule $vehicules): void 
    {
        if($vehicule instanceof Bicycle || $vehicule instanceof Skateboard){
            $this->setCurrentVehicule($vehicule);
        }
    }
}