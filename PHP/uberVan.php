<?php

require_once('Car.php');

class uberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    
public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
    parent::__construct($license, $driver);
    $this->seatsMaterial = $seatsMaterial;
    $this->typeCarAccepted = $typeCarAccepted;
  }

  public function setPassenger($passenger){
    if ($passenger == 6){
      $this->passenger = $passenger;
    }else{
      echo "Necesitas asignar 6 pasajeros";
    }
  }
}