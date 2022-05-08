<?php

$dateTime = new DateTime();

$dateTime->setDate(1945, 8, 17);
$dateTime->setTime(10, 0, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMount = new DateInterval("P1M");
$minusOneMount->invert = 1;
$dateTime->add($minusOneMount);
// var_dump($dateTime);

$newDateTime = new DateTime();
$newDateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
// var_dump($newDateTime);

echo $newDateTime->format("Y-m-d H:i:s") . PHP_EOL;

$dateFromFormat = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($dateFromFormat);
