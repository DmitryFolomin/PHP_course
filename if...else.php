<?php
// conditions.php

$distanceToTheShop = rand(0, 5);

echo "До магазина $distanceToTheShop км" . PHP_EOL;

if ($distanceToTheShop <= 1) {
    echo 'Можно дойти пешком' . PHP_EOL;
} else {
    echo 'Лучше ехать на машине' . PHP_EOL;
}
// До магазина 0 км
// Можно дойти пешком