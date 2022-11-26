<?php
require_once('AreaShapeInterface.php');
require_once('CalculateShapeInterface.php');

class Circle implements AreaShapeInterface,CalculateShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function area(){
        return pi() * pow($this->radius, 2);
    }
    public function calculate(){
        return $this->area();
    }
}