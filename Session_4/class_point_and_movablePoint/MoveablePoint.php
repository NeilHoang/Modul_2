<?php
class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setXSpeed(float $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed(float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed(float $xSpeed, float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
        $this->xSpeed = $xSpeed;
    }
    public function getSpeed()
    {
        return $arr = [$this->getXSpeed(), $this->getYSpeed()];
    }
    public function toString()
    {
        parent::toString();
        echo "," . " speed = " . $this->getXSpeed() . "," . $this->getYSpeed();
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->x." , ".$this->y;
    }
}