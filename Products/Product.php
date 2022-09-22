<?php

namespace Products;

abstract class Product
{
    protected $name;
    protected $amount;

    public function getName()
    {
        return $this->name;
    }

    public function getAmount()
    {
        return $this->amount;
    } 

    abstract protected function setAmount();
}