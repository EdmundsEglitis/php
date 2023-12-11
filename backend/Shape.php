<?php
abstract class Shape {
    public $color;

    public function __construct($cColor){
        $this->color = $cColor;
      }

    abstract public function calculateArea();
    


}
?>