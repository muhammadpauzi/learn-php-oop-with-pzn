<?php

class Data
{
    var string $first = "first";
    public string $second = "second";
    private string $third = 'third';
    protected string $fourth = "fourth";
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
