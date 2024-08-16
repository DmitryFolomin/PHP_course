<?php

$Code = rand(15, 20);

if ($Code % 2 == 0) {
    echo 'чётное число' . PHP_EOL;
} elseif ($Code % 2 != 0) {
    echo 'не чётное число' . PHP_EOL;
}