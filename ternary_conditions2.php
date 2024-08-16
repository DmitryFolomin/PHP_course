<?php
// ternary_conditions.php

$value = $undefinedVariable ?? 'Значение не определено';
// Тоже самое, что: $value = isset($undefinedVariable) ? $undefinedVariable : 'Имя не указано';

echo $value . PHP_EOL;
// Значение не определено