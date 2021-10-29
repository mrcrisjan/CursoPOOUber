<?php

require_once('Car.php');

class uberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model) {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
      }

      public function PrintDataCar(){
        echo "
          Este es un UberX
          Licencia: $this->license <br>
          Driver: {$this->driver->name} <br>
          Número de pasajeros: $this->passenger<br>
          Marca de auto: $this->brand <br>
          Modelo: $this->model <hr>
        ";
      }

}