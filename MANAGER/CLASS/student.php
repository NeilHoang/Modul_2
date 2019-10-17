<?php


class student
{
    public $id;
    public $name;
    public $phone;
    
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
}