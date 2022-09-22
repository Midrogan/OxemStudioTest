<?php

namespace Farms;

class Farm 
{
    private $lastId = 0;
    private $barn = [];
    private $products = [];

    public function getLastId()
    {
        return $this->lastId;
    }

    public function addAnimals($class, $count = 1)
    {
        for($i = 0; $i < $count; $i++) {
            $animal = new $class;

            $this->lastId++;
            $animal->setId($this->lastId);

            $this->barn[] = $animal;
        }   
    }

    public function getAddedAnimals()
    {
        foreach($this->barn as $animal) {
            $animalName = $animal->getName();

            !isset($array[$animalName]) ? $array[$animalName] = 1 : $array[$animalName]++;
        }

        return $array;
    }

    public function collectProducts($count = 1)
    {
        for($i = 0; $i < $count; $i++) {
            foreach($this->barn as $animal) {
                $product = $animal->getProduct();
                $this->products[] = $product;

                $productName = $product->getName();

                if(!isset($array[$productName])) $array[$productName] = 0;
                $array[$productName] += $product->getAmount();
            }

            return $array;
        }
    }

    public function getCollectedProducts()
    {
        foreach($this->products as $product){
            $productName = $product->getName();

            if(!isset($array[$productName])) $array[$productName] = 0;
            $array[$productName] += $product->getAmount();
        }

        return $array;
    }
}