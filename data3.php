<?php // Lesson 3
// DATA FILE (CONNECTION WITH DB AND GETTING DATA)

require_once 'classes3.php';

// PART 1

//$news1 = new NewsPublication();
//$news2 = new NewsPublication();
//$article1 = new ArticlePublication();
//$photo1 = new PhotoPublication();
//
//$publications = [
//    $news1,
//    $news2,
//    $article1,
//    $photo1,
//];


// PART 2

$publications = array();
$db_connection = mysqli_connect("localhost:3307", "root", "", "php_oop_db");

if(mysqli_connect_errno()){
    echo "Filed to connect with MySQL: " . mysqli_connect_error() . "<br />";
}else{
    $result = mysqli_query($db_connection, "SELECT * FROM publications");
    while($row = mysqli_fetch_array($result)){
        $publications[] = new $row['type']($row);
    }
}


// FOR CHECKING
//echo '<pre>';
//print_r($publications);
//echo '</pre>';