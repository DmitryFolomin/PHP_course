<?php
// boolean_logic.php

// Логическое ИЛИ (&&) / дизъюнкция

$passEnteringExam = true;
$passPreviousCourse = false;

if ($passEnteringExam || $passPreviousCourse) {
    echo 'Вы можете приступить к следующему учебному курсу' . PHP_EOL;
}
// Вы можете приступить к следующему учебному курсу