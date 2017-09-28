<?php // Lesson 2
// EXTENDING
// FINAL CLASS & FINAL METHOD
// parent::  ACCESSING

abstract class Phone //  you can check also "final" class
{
    const BUTTON = true;
    public $height;
    protected $width;
    private $weight;
    
    public function getWeight($someWeight){
        if($this->weight < $someWeight){
            return "This phone weight small than " . $someWeight . "<hr />";
        }elseif ($this->weight > $someWeight){
            return "This phone weight more than " . $someWeight . "<hr />";
        }else{
            echo "This phone wight is " . $someWeight . "<hr />";
        }
    }

    protected function setWeight($newWeight){ // you can check also "final" function
        $this->weight = $newWeight;
    }

    abstract public function screenInch();
}

class iPhone extends Phone
{
    // private function setWeight(){} // IDE error
    protected function setWeight($newWeight) // for final function IDE will thrown an error
    {
        parent::setWeight($newWeight); // TODO: Change the autogenerated stub
    }


    public function screenInch()
    {
        // TODO: Implement screenInch() method.
        return $this->height * $this->width;
    }
}

//$phone = new Phone(); // IDE error
$iPhone = new iPhone();