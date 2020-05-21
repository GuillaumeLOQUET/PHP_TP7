<?php

class circle extends Shape {
    private $radius ;
    public function __construct($radius)
    {
        $this->radius = $radius ;
    }

    public function getArea()
    {
        echo "Circle Area : ".$this->radius*$this->radius*3.14;
    }
}