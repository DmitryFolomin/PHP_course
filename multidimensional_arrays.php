<?php
// multidimensional_arrays.php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

var_dump($matrix[2]);
//array(3) {
//    [0] =>
//    int(7)
//    [1] =>
//    int(8)
//    [2] =>
//    int(9)
//}

echo $matrix[1][0] . PHP_EOL; // 4
echo $matrix[0][0] . PHP_EOL; // 1