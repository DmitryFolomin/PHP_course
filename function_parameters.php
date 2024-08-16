<?php
// function_parameters.php

function showIntegers($maxNumber, $step)
{
    $number = 0;

    while ($number < $maxNumber) {
        echo "$number ";
        $number += $step;
    }
}

showIntegers(3, 1);
// 0 1 2

showIntegers(10, 3);
// 0 3 6 9