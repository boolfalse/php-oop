<?php // Lesson 7
// TRAIT
namespace lib\traits;

trait HelloWorld
{
    public function hello_world(){
        echo "<br />HELLO WORLD !!!";
    }
    public function boot(){
        echo "<br />" . get_called_class() . " BOOT Hello World";
    }
}