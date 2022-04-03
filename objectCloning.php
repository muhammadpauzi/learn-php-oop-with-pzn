<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Oji";
$student1->value = 100;
$student1->setSample("XXX");
var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// manual
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;

// tahapan/steps of __clone magic method
// $student1 => $student2 = clone $student1 => $student2->__clone();
