<?php

$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];

$passenger = rand(0, 1000);

foreach ($cars as $car) {
    $distanceToPassenger = abs($car['position'] - $passenger);
    $status = $car['isFree'] ? 'свободен' : 'занят';

    echo $car['name'] . ', стоит на ' . $car['position'] . ' км, до пассажира ' . $distanceToPassenger . ' км (' . $status . ')' . PHP_EOL;
}