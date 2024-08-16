<?php


$user = 'Mikhail';
$userStringLenght = strlen($user);

echo "Длина строки $user равна: $userStringLenght" . PHP_EOL;


$user = 'Михаил';
$userStringLenght = strlen($user);

echo "Длина строки $user равна: $userStringLenght" . PHP_EOL;

$userStringLenght = mb_strlen($user);

echo "Длина строки $user равна: $userStringLenght" . PHP_EOL;

echo PHP_EOL;


$lineToTrim = '  Строка с пробелами  ';

echo 'Получившаяся строка: "' . trim($lineToTrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . ltrim($lineToTrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . rtrim($lineToTrim) . '"' . PHP_EOL;


$url = '/page/';
echo 'Получившаяся строка: "' trim($url, characters: '/') . '"' . PHP_EOL;


echo PHP_EOL;


$sentence = 'This program on PHP';
echo 'Позиция подстроки: ' . strpos($sentence, needle: 'PHP') . PHP_EOL;
echo 'Позиция подстроки: ' . strpos($sentence, needle: 'PHP') . PHP_EOL;
echo 'Позиция подстроки: ' . stripos($sentence, needle: 'PHP') . PHP_EOL;


echo PHP_EOL;



echo substr(string: 'Hello World' , offset 2) . PHP_EOL;
echo substr(string: 'Hello World' , offset 2, length: 2) . PHP_EOL;
echo substr(string: 'Hello World' , offset -5) . PHP_EOL;
echo substr(string: 'Hello World' , offset -5, length: 1) . PHP_EOL;
echo substr(string: 'Hello World' , offset 2, length: -2) . PHP_EOL;


echo PHP_EOL;




