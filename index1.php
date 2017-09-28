<?php // Lesson 1
// FIRST EXAMPLES
// EXTENDING & ABSTRACTION
// CONSTRUCTOR, DESTRUCTOR
// PROPERTIES & METHODS
// STATIC & CONST VARIABLES
// ENCAPSULATION, ACCESS MODIFICATORS
// SOME INTERESTING THINGS
// $this->  &  self::  ACCESSING

class Car
{
    const WHEEL = 4; // wheels count
    public $speed; // ~ km per hour
    public $type; // machine type (firm, e.g. mercedes, audi, etc)
    public $color; // machine color

    public function __construct($speed = 100, $type = 'Mercedes'){
        $this->speed = $speed;
        $this->type = $type;
        echo __CLASS__ . " / " . __METHOD__. "<hr />";
    }

    public function timeForDistance ($distance){
        $time = $distance / $this->speed; // $this not available in static functions
        return $time;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo self::class . " Object deleted (" . $this->type . ")<hr />";
    }
}

$obj1 = new Car();
echo Car::WHEEL . "<hr />";
unset($obj1);
//print_r($obj1);

$obj2 = new Car();
echo $obj2->timeForDistance(200) . "<hr />";
echo get_class($obj2) . "<hr />";

class BMW extends Car
{
    public $model;
    public $color;

    public function __construct($speed = 100, $type = 'Opel'){
        $this->speed = $speed;
        $this->type = $type;

        $this->model = "X7";
        $this->color = "Red";
    }

    public function getModelName(){
        return "The model name is " . $this->model;
    }
}

$bmw1 = new BMW(150, 'Audi');
echo $bmw1->getModelName() . "<hr />";
echo BMW::WHEEL . "<hr />";
