<?php

namespace Animals;

use Products\Wool;

class Sheap extends Animal
{
    protected $name = 'Sheap';
    
    public function getProduct()
    {
        $wool = new Wool;
        $wool->setAmount();
        return $wool;
    }
}