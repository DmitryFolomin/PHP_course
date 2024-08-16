<?php
// ternary_conditions.php

$orderPrice = rand(1950, 2050);

echo "Стоимость заказа: $orderPrice" . PHP_EOL;

//if ($orderPrice >= 2000) {
//    $deliveryPrice = 0;
//} else {
//    $deliveryPrice = 300;
//}

$deliveryPrice = $orderPrice >= 2000 ? 0 : 300;

$sumPrice = $orderPrice + $deliveryPrice;

echo "Стоимость доставки: $deliveryPrice. Общая стоимость: $sumPrice" . PHP_EOL;
// Стоимость заказа: 2024
// Стоимость доставки: 0. Общая стоимость: 2024