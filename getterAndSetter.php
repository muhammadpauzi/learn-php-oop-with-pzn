<?php
require_once __DIR__ . '/data/Category.php';

use Data\Category;

$category = new Category();
// $category->name = "Smartphone";
$category->setName("Smartphone");
// $category->setName("      ");
$category->setExpensive(true);

echo "Name {$category->getName()}" . PHP_EOL;
echo "Is expensive {$category->isExpensive()}" . PHP_EOL;
