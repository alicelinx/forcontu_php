<?php
require '6_4a.php';

class Cat extends Pet {
  private $name;
  public static $max_feed;
  private $feed = 0;

  public function __construct($name, $age) {
    $this->name = $name;
    parent::__construct($age);
    self::$max_feed = 5;
  }

  public function feed($quantity) {
    $this->feed += $quantity;
  }
}

?>