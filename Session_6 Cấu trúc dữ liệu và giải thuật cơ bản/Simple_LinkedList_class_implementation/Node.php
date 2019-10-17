<?php


class Node
{
    public $data;
    public $nest;
    
    public function __construct($data)
    {
        $this->data = $data;
        $this->nest = NULL;
    }
    
    function readNode()
    {
       return $this->data;
    }
}