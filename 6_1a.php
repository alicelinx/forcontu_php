<?php
namespace php\Vehicles;

class Vehicle {
  public $brand = "Toyota";
  public $seats = 5;
  public $fuel_capacity = 15;
  public $license_plate = "ABC-1234";

  protected $fuel_level = 0;
  protected $current_speed = 0;
  protected $state = "off";
  
  public function getBrand() {
    return $this->brand;
  }

  public function getSeats() {
    return $this->seats;
  }

  public function getLicensePlate() {
    return $this->license_plate;
  }

  public function setFuelLevel($fuel_level) {
    $this->fuel_level = $fuel_level;
  }

  public function setCurrentSpeed($current_speed) {
    $this->current_speed = $current_speed;
  }

  public function setState($state) {
    $this->state = $state;
  }
  
  }
?>