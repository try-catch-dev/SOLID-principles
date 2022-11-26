<?php
require_once('AreaShapeInterface.php');
require_once('CalculateShapeInterface.php');
require_once('VolumeShapeInterface.php');

class Cube implements AreaShapeInterface,VolumeShapeInterface,CalculateShapeInterface{
    public function area(){
        //logic calculate area
        return 6 * $this->length;
    }

    public function volume(){
        //logic calculate volume
        return pow($this->length,3);
    }
    
    public function calculate(){
        //logic calculate
        return $this->area();
    }
}