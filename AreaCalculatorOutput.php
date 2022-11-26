<?php
class AreaCalculatorOutput{
    protected $calculator;

    public function __construct($calculator){
        $this->calculator = $calculator;
    }
    public function string()
    {
        return implode('', [
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            '',
        ]);
    }
    public function json()
    {
        return json_encode([
            'data'=>$this->calculator->sum(),
        ]);
    }
}