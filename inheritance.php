<?php
require_once __DIR__ . "/data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Oji";
$vp->sayHello("Joko");
