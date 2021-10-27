<?php

require_once('Car.php');

class uberBlack extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    
public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
    parent::__construct($license, $driver);
    $this->seatsMaterial = $brand;
    $this->typeCarAccepted = $typeCarAccepted;
  }
}