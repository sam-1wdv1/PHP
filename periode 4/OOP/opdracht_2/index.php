<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
echo "I love ";
$apple = new Fruit("Apple");
echo $apple->get_name();
?>