<?php

namespace Data;

require_once 'data/Animal.php';


interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat // this is covariance
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog // this is covariance
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
