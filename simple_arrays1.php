<?php
// simple_arrays.php

$petTypes = ['кот', 'собака', 'рыбка'];

// Получение данных из массива
echo $petTypes[1] . PHP_EOL; // собака

// Добавление элемента в конец массива
$petTypes[] = 'попугай';
var_dump($petTypes);
//array(4) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [2] =>
//    string(10) "рыбка"
//    [3] =>
//    string(14) "попугай"
//}

// Изменение значения элемента
$petTypes[2] = 'кролик';
echo $petTypes[2] . PHP_EOL; // кролик

// Удаление элемента из массива
unset($petTypes[2]);
var_dump($petTypes);
//array(3) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [3] =>
//    string(14) "попугай"
//}