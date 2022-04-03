<?php

use Data\CatShelter;
use Data\DogShelter;

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("miuw");

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("guguk");
