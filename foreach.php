<?php
// foreach.php

$basket = [
    [
        'product' => 'Тетрис',
        'price' => 250,
        'quantity' => 1,
    ],
    [
        'product' => 'Плюшевый медведь',
        'price' => 100,
        'quantity' => 3,
    ],
];

$sum = 0;

foreach ($basket as $position) {
    $sum += $position['price'] * $position['quantity'];
}

echo "В корзине товаров на сумму: $sum" . PHP_EOL;
// В корзине товаров на сумму: 550