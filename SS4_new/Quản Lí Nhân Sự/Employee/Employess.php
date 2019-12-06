<?php


class Employess
{
    protected $they;
    protected $name;
    protected $birthday;
    protected $address;
    protected $job;
    
    public function __construct($they,$name,$birthday,$address,$job)
    {
        $this->they = $they;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->job = $job;
    }
    
   
    public function getThey()
    {
        return $this->they;
    }
    public function setThey($they)
    {
        $this->they = $they;
    }
    
   
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
   
    
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    
   
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    
    public function getJob()
    {
        return $this->job;
    }
    public function setJob($job)
    {
        $this->job = $job;
    }
}