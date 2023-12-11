<?php
include_once "Shape.php";
class Rectangle extends Shape {
public $width;
public $height;
public $area;
public function __construct($cWidth, $cHeight, $color){
    parent::__construct($color);
    $this->width = $cWidth;
    $this->height = $cHeight;
  }

public function calculateArea(){
    return $this->width * $this->height;
}
}
?>