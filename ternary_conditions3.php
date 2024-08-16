<?php
правильно
// ternary_conditions.php

var_dump($value > 0 ? 'больше' : 'меньше');

$showProfileLink = $value > 0;



не правильно
<?php
// ternary_conditions.php

// пример неправильного использования тернарного оператора
$value > 0 ? var_dump('больше') : var_dump('меньше');

// пример лишнего использования тернарного оператора
$showProfileLink = $value > 0 ? true : false;
