<?php

require_once("AreaCalculator.php");

class VolumeCalculator extends AreaCalculator{

    public function __construct($shapes = [])
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        //new logic
        $volume=[];
        foreach ($this->shapes as $shape) {
            if (!is_a($shape, 'AreaShapeInterface')) {
                throw new Exception("Error Invalid Class, Only allow AreaShapeInterface");
            } 
            $volume[] = $shape->volume();
        }

        return round(array_sum($volume),2);
    }
}