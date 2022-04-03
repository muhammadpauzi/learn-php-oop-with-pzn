<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Oji";
$student->value = 100;

// invoke
$student();
$student(1, 2, 4, 5, true, "hello");
