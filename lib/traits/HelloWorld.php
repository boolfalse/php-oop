<?php // Lesson 7
// TRAIT
namespace lib\traits;

trait HelloWorld
{
//    const $abc = 123; // error

//    static public $ext = 110;
//    static public function ext(){
//        echo 123;
//    }

    public function hello_world(){
        echo "<br />HELLO WORLD !!!";
    }
    public function boot(){
        echo "<br />" . get_called_class() . " BOOT Hello World";
    }
}