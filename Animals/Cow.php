<?php

namespace Animals;

use Products\Milk;

class Cow extends Animal
{
    protected $name = 'Cow';
    
    public function getProduct()
    {
        $milk = new Milk;
        $milk->setAmount();
        return $milk;
    }
}