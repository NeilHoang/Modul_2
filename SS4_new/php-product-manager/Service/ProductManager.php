<?php

namespace Service;

class ProductManager
{
    private $products;
    
    public function __construct()
    {
        $this->products = [];
    }
    
    public function add($product)
    {
        $this->products[] = $product;
    }
    
    public function getProduct()
    {
        return $this->products;
    }
}