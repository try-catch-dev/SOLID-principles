<?php

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area=[];
        foreach ($this->shapes as $shape) {
            if (!is_a($shape, 'AreaShapeInterface')) {
                throw new Exception("Error Invalid Class, Only allow AreaShapeInterface");
            } 
            $area[] = $shape->area();
        }

        return round(array_sum($area),2);
    }
}