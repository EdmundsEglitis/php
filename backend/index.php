<?php
include "Circle.php";
include "Rectangle.php";
header("Access-Control-Allow-Origin: *");
//$data = ["message"=> "Hi from backend"];
//echo json_encode($data);

$circle = new Circle(200,"yellow");
$rectangle = new Rectangle(400,800,"green");

$data =  ["circleRadius" => $circle->radius,
          "circleArea" => $circle->calculateArea(),
          "circleColor" => $circle->color,
          "rectangleHeight" => $rectangle->height,
          "rectangleWidth" => $rectangle->width,
          "rectangleArea" => $rectangle->calculateArea(),
          "rectangleColor" => $rectangle->color
];
echo json_encode($data);
?>