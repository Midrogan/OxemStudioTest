<?php

namespace Products;

class Milk extends Product
{
    protected $name = 'Milk';

    public function setAmount()
    {
        return $this->amount = rand(8,12);
    } 
}