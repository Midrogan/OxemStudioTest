<?php

namespace Products;

class Wool extends Product
{
    protected $name = 'Wool';

    public function setAmount()
    {
        return $this->amount = rand(4,5);
    } 
}