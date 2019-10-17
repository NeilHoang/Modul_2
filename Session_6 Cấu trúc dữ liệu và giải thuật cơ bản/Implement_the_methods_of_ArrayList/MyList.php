<?php


class MyList
{
    private $size;
    static $default_capacity;
    private $objectElement;
    
    public function __construct($objectElement)
    {
        $this->size = 0;
        $this->objectElement = $objectElement;
        MyList::$default_capacity = 10;
    }
    
    public function ArrayList($arr)
    {
        if (is_array($arr) == true) {
            $this->objectElement = $arr;
        } else {
            $this->objectElement = [];
        }
    }
    
    public function AddFirst($index, $value)
    {
        array_slice($this->objectElement, $index, 0, $value);
    }
    
    public function AddLast($value)
    {
        array_push($this->objectElement, $value);
    }
    
    public function RemoveList($index)
    {
        $lenghtArr = count($this->objectElement);
        for ($i = 0; $i < $lenghtArr; $i++) {
            if ($index == $this->objectElement[$i]) ;
            array_slice($this->objectElement, $i);
        }
        return $this->objectElement;
    }
    
    public function SizeList()
    {
        return count($this->objectElement);
    }
    
    public function BooleanContains($index)
    {
        $lengthArray = count($this->objectElement);
        for ($i = 0; $i < $lengthArray; $i++) {
            if ($index == $this->objectElement) {
                return true;
            } else {
                return false;
            }
        }
    }
    
    public function IndexOf($index)
    {
        for ($i = 0; $i < count($this->objectElement); $i++) {
            if ($index == $this->objectElement[$i]) {
                return $i;
            } else {
                return -1;
            }
        }
    }
    
//    public function BooleanAdd($value)
//    {
//
//    }
    
    public function get($index)
    {
        for ($i = 0; $i < $this->objectElement; $i++) {
            if ($index == $i) {
                return $this->objectElement[$i];
            } else {
                return "Error";
            }
        }
    }
    public function clear()
    {
        unset($this->objectElement);
    }
}