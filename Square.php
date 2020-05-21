<?php


class Square extends Shape {
    private $width ;
    private $height ;
    public function __construct($width,$height)
    {
        $this->width = $width ;
        $this->height = $height ;
    }
    public function getArea()
    {
        echo "Square Area : ".$this->width*$this->height;
    }
}