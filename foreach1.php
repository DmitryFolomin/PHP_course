<?php
// foreach.php

$colors = [
    'red' => 'красный',
    'blue' => 'синий',
    'white' => 'белый',
];

foreach ($colors as $code => $color) {
    echo "Цвет: $color. Код цвета: $code" . PHP_EOL;
}
// Цвет: красный. Код цвета: red
// Цвет: синий. Код цвета: blue
// Цвет: белый. Код цвета: white