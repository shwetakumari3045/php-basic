<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return implode(",",$this->name);
  }
  function get_color() {
    return implode(",",$this->color);
  }
}

$apple = new Fruit(["Apple","Mango",], ["green","yellow","purple"]);
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>