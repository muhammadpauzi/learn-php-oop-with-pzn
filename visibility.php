<?php
require_once __DIR__ . '/data/Product.php';

use \Data\Product;
use Data\ProductDummy;

$product = new Product("Apple", 20000);

// must be error
// echo $product->name . PHP_EOL;

echo $product->getName() . PHP_EOL;
echo $product->getPrice();


$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
