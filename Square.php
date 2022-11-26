<?php
require_once('AreaShapeInterface.php');
require_once('CalculateShapeInterface.php');

class Square implements AreaShapeInterface,CalculateShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area(){
        return pow($this->length, 2);
    }

    public function calculate(){
        return $this->area();
    }
}