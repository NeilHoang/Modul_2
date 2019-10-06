<?php

define('SLOW', 1);
define("MEDIUM", 2);
define("FAST", 3);

class Fan
{
    private $speed;
    public $on;
    private $radius;
    public $color;
    
    public function __construct()
    {
        $this->speed = SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function isOn()
    {
        return $this->on;
    }
    public function setColor( $color)
    {
        $this->color = $color;
    }
    public function setOn( $on)
    {
        $this->on = $on;
    }
    public function setRadius( $radius)
    {
        $this->radius = $radius;
    }
    public function setSpeed( $speed)
    {
        $this->speed = $speed;
    }
    function toString() {
        if($this->isOn()) {
            return " speed " . $this->getSpeed(). ", color " .$this->getColor().", fan radius " .$this->getRadius().", FAN is on";
        }
        return " speed " . $this->getSpeed(). ", color " .$this->getColor().", fan radius " .$this->getRadius().", FAN is off";
    }
}