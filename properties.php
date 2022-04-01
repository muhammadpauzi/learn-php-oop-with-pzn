<?php
require_once "data/Person.php";

$person = new Person("Pauzi", "Langkat");
// $person->name = "Pauzi";
// $person->address = "Langkat";
// $person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Muhammad", null);
// $person2->name = "Muhammad";
// $person2->address = null;
// $person2->country = "Indonesia";

// seharusnya error
// $person2->country = [];


var_dump($person2);
