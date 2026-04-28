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
}
?>