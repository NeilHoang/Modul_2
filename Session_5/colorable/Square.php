<?php

class Square implements Colorable
{
    protected $width;
    protected $height;
    protected $color;
    
    public function __construct($width, $height, $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function setWidth($width)
    {
        $this->width = $width;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    public function howToColor()
    {
        // TODO: Implement howToColor() method.
        return "Color is: $this->color";
    }
    
    public function Area()
    {
        return $this->width * $this->height;
    }
}