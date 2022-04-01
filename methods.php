<?php
require_once "data/Person.php";

$pauzi = new Person();
$pauzi->name = "Pauzi";

$pauzi->sayHello("Pauzi");
$pauzi->sayHello(null);
$pauzi->info();
