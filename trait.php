<?php

require_once __DIR__ . '/data/SayGoodBye.php';

use \Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();

$person->hello("Oji");
$person->goodBye("Oji");

var_dump($person);
$person->name = "Oji";
var_dump($person);
