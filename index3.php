<?php // Lesson 3
// POLYMORPHISM
// PUBLICATIONS FILE

require_once 'data3.php';

foreach ($publications as $item){
    echo get_class($item) . "<br />";
    echo '<pre>';
    print_r($item->printItem()); // Polymorphism
    echo '</pre>';
    echo  "<hr />";
}