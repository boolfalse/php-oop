<?php // Lesson 7
// TRAIT
namespace lib\traits;

trait GoodByeWorld
{
    public function good_bye_world(){
        echo "<br />GOOD BYE WORLD !!!";
    }
    public function boot(){
        echo "<br />" . get_called_class() . " BOOT Good Bye World";
    }
}