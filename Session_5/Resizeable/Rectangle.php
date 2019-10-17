<?php
include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $width;
    public $height;
    
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function resize()
    {
        $this->width = $this->width * rand(1,100);
        $this->height = $this->height * rand(1,100);
    }
    public function displays(){
        return "Chieu dai la: $this->height, chieu rong la: $this->width";
    }
}