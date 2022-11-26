<?php
require_once('AreaShapeInterface.php');

class Rectangular implements AreaShapeInterface{
    public $length,$width;

    public function __construct($length,$width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area(){
        return $this->length * $this->width;
    }
}