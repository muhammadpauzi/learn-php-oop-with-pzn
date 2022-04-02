<?php
require_once __DIR__ . '/data/Car.php';

use \Data\BMW;

$car = new BMW();
$car->drive();
echo $car->getTire();
