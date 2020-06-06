<?php
/**
* This is a very basic DocBlock
* A simple class
*/
class Fruit {
    /**
  * A public variable
  *
  * @var string stores data for the class
  */
  public $name;
  public $color;
 /**
  * Sets $name to a new value upon class instantiation
  *
  * @param string $name a value required for the class
  * @return void
  */
  function __construct($name) {
    $this->name = $name;
  }
 /**
  * Multiplies two integers
  *
  * Accepts a pair of integers and returns the
  * product of the two.
  *
  * @param int $this a number to be multiplied
  * @param int $name a number to be multiplied
  * @return int the product of the two parameters
  */
  function get_name() {
    return $this->name;
  }
}
echo "I love ";
$apple = new Fruit("Apple");
echo $apple->get_name();
?>