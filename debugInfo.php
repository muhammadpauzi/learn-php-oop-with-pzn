<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Oji";
$student->value = 100;
$student->setSample("sample");

var_dump($student);
