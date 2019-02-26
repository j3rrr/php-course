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

    // kann überall verwendet werden
    public $wheels = 4;
    // nur innherhalb class{} oder in extended
    protected $hood = 1;
    // nur innerhalb class{}
    private $engine = 1;
    public $doors = 4;

    // Methods
    public function showProperty()
    {
        echo $this->hood;
    }

}

$bmw = new Car();
echo $bmw->wheels; // hood oder engine = error weil außerhalb class{}
$bmw->showProperty();

class Semi extends Car
{
    public function showProperty()
    {
        echo $this->hood;
    }
}

$semi = new Semi();
$semi->showProperty(); // engine = error weil private