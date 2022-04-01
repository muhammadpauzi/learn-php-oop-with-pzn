<?php
require_once __DIR__ . '/data/Conflict.php';
require_once __DIR__ . '/data/Helper.php';

use \Data\One\{Conflict, Sample, Dummy};
use \Data\Two\Conflict as Conflict2;
use function \Helper\{helpMe as help};
use const \Helper\{APPLICATION as APP};


$conflict1 = new Conflict();
$sample = new Sample();
$dummy = new Dummy();
var_dump($conflict1);
$conflict2 = new Conflict2();
var_dump($conflict2);

help();
echo APP;
