<?php
class Circle
{
    protected $radius;
    protected $name;
    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}