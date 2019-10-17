<?php

class Point3D extends Point2D
{
    public $z;
    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ(float $z)
    {
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ(float $x, float $y, float $z)
    {
        $this->setX($x);
        $this->setY($y);
        $this->setZ($z);
    }
    public function getXYZ()
    {
        return $arr = [$this->getX(),$this->getY(),$this->setZ()];
    }
    public function toString()
    {
        parent::toString();
        echo ", Z = : $this->z";
    }
}