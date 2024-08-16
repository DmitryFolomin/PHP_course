<?php



$catalog = [
   'categories' => [...],
   'products' => [...]
];

var_dump(count($catalog['products']));

shuffle($catalog['categories']);
var_dump($catalog['categories']);