<?php
include "Circle.php";
include "Rectangle.php";
header("Access-Control-Allow-Origin: *");
$data = ["message"=> "Hi from backend"];
echo json_encode($data);

$circle = new Circle(8,"yellow");
$rectangle = new Rectangle(8,16,"green");

echo $circle->calculateArea();

?>