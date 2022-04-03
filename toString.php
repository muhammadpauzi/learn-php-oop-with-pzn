<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Oji";
$student->value = 100;

// otomatis menjalankan __toString()
$string = (string) $student;

echo $string;
echo $student->__toString();
echo $student;
