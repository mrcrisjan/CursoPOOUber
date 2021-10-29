<?php

require_once("Car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberBlack.php");
require_once("uberVan.php");
require_once("Account.php");

$uberX = new uberX("JHS876", new Account("Cristian Ladino", "ID23498723"), "Chevrolet", "Spark GT");

$uberX->PrintDataCar();

$uberPool = new uberPool("KJH353", new Account("Carlos Saenz", "ID89726"), "Renault", "Symbol");

$uberPool->PrintDataCar();

$uberVan = new uberVan("KHS234", new Account("Pepe Farango", "ID3278"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->PrintDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();