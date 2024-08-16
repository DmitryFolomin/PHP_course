Задание 3


Добро пожаловать в одномерный мир - в этом мире существует только одно шоссе - прямая от 0 до 1000

Каждый день люди на этом шоссе ездят на такси на работу и домой или магазин или куда еще, мало ли у кого какие дела.

В этом мире на шоссе в случайных местах (функция rand(0, 1000)) работают 5 машин такси.

$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];
где: name - название машины, position - ее положение на шоссе, isFree - признак свободна или занята.

Ваш алгоритм, на основе этих данных, должен определить самое ближайшее и свободное такси до пассажира, который хочет куда-то поехать.

Положение пассажира также случайная величина, он может стоять в любой точке шоссе:
$passenger = rand(0, 1000);
---
Напишите скрипт, который для каждого такси будет выводить строку, вида:
<Название машины>, стоит на <км, где стоит машина> км, до пассажира <км до пассажира> км (<занят/свободен>)</ - едет это такси>


Например:
"Такси 1, стоит на 15 км, до пассажира 3 км (занят)"
"Такси 2, стоит на 0 км, до пассажира 12 км (свободен) - едет это такси"
"Такси 3, стоит на 300 км, до пассажира 288 км (свободен)"
// Для переноса строки используйте:
echo '<br>';
или константу PHP_EOL
echo PHP_EOL;