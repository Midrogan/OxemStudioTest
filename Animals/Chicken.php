<?php

namespace Animals;

use Products\Egg;

class Chicken extends Animal
{
    protected $name = 'Chicken';
    
    public function getProduct()
    {
        $egg = new Egg;
        $egg->setAmount();
        return $egg;
    } 
}