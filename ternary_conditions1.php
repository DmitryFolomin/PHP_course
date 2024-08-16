<?php
// ternary_conditions.php

$userName = '';

$displayName = $userName ?: 'Имя не указано';
// Тоже самое, что: $displayName = $userName ? $userName : 'Имя не указано';

echo $displayName . PHP_EOL;
// Имя не указано