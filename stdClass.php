<?php
$array = [
    "firstName"     => "Muhammad",
    "lastName"      => "Pauzi"
];

$object = (object) $array;
var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);
