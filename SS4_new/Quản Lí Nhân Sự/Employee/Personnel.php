<?php


class Personnel extends Employess
{
   protected $class;
   
   public function __construct($they, $lastname, $birthday, $address, $job_position)
   {
       parent::__construct($they, $lastname, $birthday, $address, $job_position);
   }
   
    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
}