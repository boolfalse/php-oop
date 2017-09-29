<?php // Lesson 7
// TRAIT
// NAMESPACE & USE OPERATORS
// PRIORITY OF TRAIT METHODS WITH SAME NAME ( :: insteadof )

namespace app;

require_once '../lib/traits/HelloWorld.php';
require_once '../lib/traits/GoodByeWorld.php';

use lib\traits\HelloWorld;
use lib\traits\GoodByeWorld;

final class App
{
    use HelloWorld, GoodByeWorld{
        HelloWorld::boot insteadof GoodByeWorld;
    }

    protected function hello_world()
    {
        echo "<br />HELLO WORLD !!! OVERRIDE";
    }
    public function __construct()
    {
        echo "<br />Have created new instance from app/ folder.";
        $this->hello_world();
        $this->good_bye_world();
    }
}

$obj = new App();
echo "<hr />";
$obj->boot();
echo "<hr />";
//$obj->hello_world(); // error
$obj->good_bye_world();