<?php

class Driver{
  public VehicleInterface $vehicle;

  public function __construct(VehicleInterface $vehicle){
  $this->vehicle = $vehicle;
  }

  public function startRide(){
    $this->vehicle->start();
  }

}

interface VehicleInterface{
  public function start();
}

class Car implements VehicleInterface{
  public function start(){
    echo "Car started";
  }
}

class Bike implements VehicleInterface{
  public function start(){
    echo "Bike started";
  }
}


// $car = new Car();
$bike = new Bike();
$driver = new Driver($bike);
$driver->startRide();
