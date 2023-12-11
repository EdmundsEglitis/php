<?php
include_once "Shape.php";
class Circle extends Shape {
public $radius;
public $area;

public function __construct($cRadius,$color){
    parent::__construct($color);
    $this->radius = $cRadius;
  }

  public function calculateArea(){
     return $this->area = $this->radius * $this->radius * 3.14;
  }

}

?>