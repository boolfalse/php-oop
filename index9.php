<?php // Lesson 9
// MAGIC METHODS
// http://php.net/manual/en/language.oop5.magic.php
// __magicMethodName

// __construct()
// __destruct()
// __call()
// __callStatic()
// __get()
// __set()
// __isset()
// __unset()
// __sleep()
// __wakeup()
// __toString()
// __invoke()
// __set_state()
// __clone()
// __debugInfo()

class Room
{
    private $prop = 123;

    public function __construct()
    {
        echo "<br />Object created !!! CONSTRUCT";
    }
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo "<br />Access object as a Function (Method) !!! INVOKE " . $this->prop;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        $stringVar = "<br />" . "Access object as a String !!! TOSTRING ";
        $stringVar .= $this->prop;
        return $stringVar;
    }
}

$myRoom = new Room();       // __construct()
$myRoom();                  // __invoke()
echo $myRoom;               // __toString()