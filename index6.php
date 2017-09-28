<?php // Lesson 6
// INTERFACE
// EXTENDING & IMPLEMENTING THEM

// PART 1

interface Vehicle
{
    public function info();
}

interface Car extends Vehicle{
    public function drive();
}
interface Boat extends Vehicle{
    public function swim();
}

class Audi implements Car
{
    public function info(){ // TODO: Implement info() method.
        echo "<br />Audi is a Germany autocompany";
    }
    public function drive(){ // TODO: Implement drive() method.
        echo "<br />Audi drives";
    }
}

$audi1 = new Audi();
$audi1->info();
$audi1->drive();


// PARt 2

class Amphibious implements Car, Boat
{
    public function info(){ // TODO: Implement info() method.
        echo "<br />info info info !!!";
    }
    public function drive(){ // TODO: Implement drive() method.
        echo "<br />drive drive drive !!!";
    }
    public function swim() { // TODO: Implement swim() method.
        echo "<br />swim swim swim !!!";
    }
}

$amphibious1 = new Amphibious();
$amphibious1->info();
$amphibious1->drive();
$amphibious1->swim();