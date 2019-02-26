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

// ! Class Name immer Großgeschrieben!
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
        // Change Value of Property for "this" instance of the Class
        $this->wheels = 10;
        echo 'Wheels move <br>';
    }

}

// initiate Class
$bmw = new Car();
// Use Methods
$bmw->MoveWheels();
// Use Properties
echo $bmw->wheels . '<br>';
// Change Value of Property
$bmw->wheels = 8;
echo $bmw->wheels . '<br>';