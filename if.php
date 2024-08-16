<?php

require_once 'C:\Users\user\first_php_project2\ for.php';
$userAge = rand(15, 20);

echo "Возраст пользователя: $userAge" . PHP_EOL;

if ($userAge >= 18) {
    echo 'Пользователь может официально устроиться работать программистом' . PHP_EOL;
}

?>