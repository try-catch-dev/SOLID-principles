<?php
require_once("Circle.php");
require_once("Square.php");
require_once("Rectangular.php");
require_once("Cube.php");
require_once("AreaCalculator.php");
require_once("AreaCalculatorOutput.php");
require_once("VolumeCalculator.php");


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
    new Rectangular(10,5),
    new Cube(10),
];

$areaCalculator = new AreaCalculator($shapes);
$volumeCalculator = new VolumeCalculator($shapes);

$output = new AreaCalculatorOutput($volumeCalculator);
// echo $output->json();
echo $output->string();