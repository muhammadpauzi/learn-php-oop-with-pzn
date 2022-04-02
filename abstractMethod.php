<?php 
require_once __DIR__ . '/data/Animal.php';

use \Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Miuw";
$cat->run();

$dog = new Dog();
$dog->name = "guguk";
$dog->run();
