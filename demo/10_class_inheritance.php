<?php

// if (class_exists("Car")) {
//     echo 'Class exists';
// } else {
//     echo 'Class does not exist';
// }

// if (method_exists("Car", "MoveWheels")) {
//     echo 'Method exists';
// } else {
//     echo 'Method does not exist';
// }

class Car
{
    // Properties
    public $wheels = 4;
    public $hood = 1;
    public $engine = 1;
    public $doors = 4;

    // Methods
    public function MoveWheels()
    {
        echo 'Wheels move <br>';
    }

    public function CreateDoors()
    {
        // Change Value of Property for "this" instance of the Class
        $this->wheels = 10;
    }

}

class Plane extends Car
{
    public $wheels = 20;
}

$jet = new Plane();
$jet->MoveWheels();
echo $jet->wheels . '<br>';