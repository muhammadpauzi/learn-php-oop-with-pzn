<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

// empty
// $mathHelper = new MathHelper();
// var_dump($mathHelper);

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Oji";
echo MathHelper::$name . PHP_EOL;
