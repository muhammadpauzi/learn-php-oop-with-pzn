<?php
require_once __DIR__ . '/data/Location.php';

use \Data\{Location, City, Province, Country};

// must be error
// $location = new Location();

$city = new City();
$city->name = "blalba";
$province = new Province();
$province->name = "blabla";
$country = new Country();
$country->name = "blablabla";
