<?php
namespace Controller;

class Student
{
    public $username;
    public $password;
    public $name;
    public $age;
    public $address;
    public $group;

    public function __construct($username,$password,$name, $age, $address, $group)
    {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->group = $group;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . "- Address: " . $this->address;
    }
}