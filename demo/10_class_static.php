<?php

class Car
{
    // static = attached to class, not instance
    static $wheels = 4;
    public $hood = 1;

    // Constructor wird immer ausgeführt, wenn eine neue Instanz erstellt wird
    public function moveWheels()
    {
        // echo $this->wheels . '<br>'; // error weil static
        echo Car::$wheels;
    }

}

$bmw = new Car();
//echo $bmw->wheels; // error weil static
echo Car::$wheels;
$bmw->moveWheels();