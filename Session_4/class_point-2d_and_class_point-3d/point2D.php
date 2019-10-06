<?php
class Point2D
{
    public $x;
    public $y;
    
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX()
    {
        return $this->x;
    }
    
    public function getY()
    {
        return $this->y;
    }
    
    public function setX(float $x)
    {
        $this->x = $x;
    }
    
    public function setY(float $y)
    {
        $this->y = $y;
    }
    
    public function setXY(float $x, float $y)
    {
        $this->y = $y;
        $this->x = $x;
    }
    
    public function getXY()
    {
        return $arr = [$this->x, $this->y];
    }
    
    public function toString()
    {
        echo " X = : " . $this->x . "," . " Y = : " . $this->y;
    }
}