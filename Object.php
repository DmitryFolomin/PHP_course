<?php

class People {
     public $age;
     public $name;
     public $profession;
     public $hobby;
}

$nick = new People;
$nick->age = 30;
$nick->name = "John";
$nick->profession = "driver";
$nick->hobby = "footbal";

echo $nick->name . "<br>";

class Animals {
    public $age;
    public $name;
    public $weight;
}
$nick = new Animals;
$nick->age = 5;
$nick->name = "Dog";
$nick->weight = 40;

echo $nick->name . "<br>";

class Planets {
    public $name;
    public $color;
    public $temperature;
}
$nick = new Planets;
$nick->name = "Earth";
$nick->color = "Blue";
$nick->temperature = 40;

echo $nick->name . "<br>";

$nick = new Planets;
$nick->name = "Jupiter";
$nick->temperature = 200;
$nick->color = "Red";

echo $nick->name . "<br>";
?>