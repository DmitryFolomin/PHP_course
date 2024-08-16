<?php
// boolean_logic.php

// Логическое И (&&) / конъюнкция

$orderPrice = 1000;
$byCourier = true;
$deliveryPrice = 0;

if ($orderPrice < 3000 && $byCourier) {
    $deliveryPrice = 300;
}

$sumPrice = $deliveryPrice + $orderPrice;

echo "Общая стоимость заказа: $sumPrice" . PHP_EOL;
// Общая стоимость заказа: 1300

// но
// $byCourier = false;
// Общая стоимость заказа: 1000