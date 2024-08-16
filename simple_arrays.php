<?php
// simple_arrays.php

// Объявление массивов
$emptyArray = [];
// $emptyArray = array(); устаревший способ

$petTypes = ['кот', 'собака', 'рыбка'];
var_dump($petTypes);
//array(3) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [2] =>
//    string(10) "рыбка"
//}

// Получение данных из массива
echo $petTypes[1] . PHP_EOL; // собака