<?php
// while.php

$sum = 0;
$productsCount = 0;

while ($sum < 100 && $productsCount < 20) {
    $productPrice = rand(1, 10);
    $sum += $productPrice;
    $productsCount++;
}

echo "Куплено товаров: $productsCount. На сумму: $sum" . PHP_EOL;
// Куплено товаров: 16. На сумму: 103
// …или…
// Куплено товаров: 20. На сумму: 92