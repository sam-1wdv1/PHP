<?php
/**
* This is a DocBlock
* A simple class
*/
abstract class drink {
        /**
  * A public variable
  */
  public $temperature;
   /**
  * Sets a variable for upcomming info
  *
  */
  function getInfo() {
    return "This drink is $this->temperature.";
  }
}
  /**
  * A child class
  *
  *A function to construct a variable from parent class
  */
class Milk extends drink {
  public function __construct() {
    $this->temperature = "cold";
  }
  /**
  *
  *A function to take over from the parent class
  */
  public function getInfo(){
    return parent::getInfo() . " I like my milk this way.";
  }
}
/**
  * A child class
  *
  *A function to construct a variable from parent class
  */
class water extends drink {
    public function __construct() {
      $this->temperature = "normal";
    }
      /**
  *
  *A function to take over from the parent class
  */
    public function getInfo(){
      return parent::getInfo() . " I like my water this way.";
    }
  }
  /**
  *
  *return the getInfo Function from Child´s classes and Parent classes
  */
  
$milk = new Milk();
echo $milk->getInfo();

$water = new Water();
echo $water->getInfo();