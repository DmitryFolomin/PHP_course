<?php
// multidimensional_arrays.php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

// Добавление элемента в последний подмассив
$matrix[2][] = 10;
// 1 2 3
// 4 5 6
// 7 8 9 10

// Изменение значения вложенного элемента
$matrix[1][1] = 0;
// 1 2 3
// 4 0 6
// 7 8 9 10

// Удаление элемента вложенного массива
unset($matrix[0][2]);
// 1 2
// 4 0 6
// 7 8 9 10

// Добавление нового подмассива (новой строки)
$matrix[] = [11, 12, 13];
// 1 2
// 4 0 6
// 7 8 9 10
// 11 12 13

// Изменение элемента
$matrix[0] = [9, 9, 9];
// 9 9 9
// 4 0 6
// 7 8 9 10
// 11 12 13

// Удаление целой подстроки
unset($matrix[1]);
// 9 9 9
// 7 8 9 10
// 11 12 13

var_dump($matrix);