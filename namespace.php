<?php
require_once __DIR__ . '/data/Conflict.php';
require_once __DIR__ . '/data/Helper.php';

use \Data\One\Conflict;
use \Data\Two\Conflict as Conflict2;
use function \Helper\helpMe as help;
use const \Helper\APPLICATION as APP;


// global namespace (default)
// namespace {}
// $conflict1 = new \Data\One\Conflict();
$conflict1 = new Conflict();
var_dump($conflict1);
$conflict2 = new Conflict2();
var_dump($conflict2);

// \Helper\helpMe();
// helpMe();
help();
// echo APPLICATION;
echo APP;
