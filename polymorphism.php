<?php

require_once __DIR__ . '/data/Programmer.php';
require_once __DIR__ . '/data/Manager.php';

use Data\{Programmer, BackendProgrammer, FrontendProgrammer, Company};
use function Data\sayHelloProgrammer;

$company = new Company();

// this's polymorphism (bisa berubah bentuk/tipe data (inheritance))
$company->programmer = new Programmer('Oji');
var_dump($company->programmer);
$company->programmer = new FrontendProgrammer('Oji');
var_dump($company->programmer);
$company->programmer = new BackendProgrammer('Oji');
var_dump($company->programmer);

// tidak bisa, error
// $company->programmer = new Manager();
sayHelloProgrammer(new Programmer("Oji"));
sayHelloProgrammer(new FrontendProgrammer("Oji"));
sayHelloProgrammer(new BackendProgrammer("Oji"));
