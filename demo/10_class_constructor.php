<?php

class Car
{
    // Properties
    public $wheels = 4;
    public $hood = 1;
    public $engine = 1;
    public $doors = 4;

    // Constructor wird immer ausgeführt, wenn eine neue Instanz erstellt wird
    public function __construct()
    {
        echo $this->wheels . '<br>';
    }

}

$bmw = new Car();
$vw = new Car();