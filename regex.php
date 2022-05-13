<?php

$matches = [];
$result = (bool) preg_match_all("/pauzi|mad/i", "muhammad pauzi", $matches);
var_dump($matches);
var_dump($result);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING, bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "muhammad pauzi,sedang-belajar-php");
var_dump($result);
