<?php
// boolean_logic.php

echo (2 + 2 / 2) . PHP_EOL; // 3
echo ((2 + 2) / 2) . PHP_EOL; // 2

$a = $b = $c = true;

// ассоциативность
var_dump(($a && $b) && $c);
var_dump($a && ($b && $c));

// коммуникативность
var_dump($a && $b);
var_dump($b && $a);