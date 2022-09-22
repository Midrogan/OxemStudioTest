<?php

namespace Products;

class Egg extends Product
{
    protected $name = 'Egg';

    public function setAmount()
    {
        return $this->amount = rand(0,1);
    }
}