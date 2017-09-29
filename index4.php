<?php // Lesson 4
// TYPE HINTING
// METHOD'S SIGNATURE

// PART 1

class Student
{
    public $name;
    public $results;

    function __construct($name, $results)
    {
        foreach ($results as $subject => $value){
            echo $subject . ": " . $value . "<hr />";
        }
    }
}

function onError(){
    echo "Not valid type for argument<hr />";
}
set_error_handler('onError');

$student1 = new Student('Bob', ['math' => 4, 'biology' => 5]);
$student2 = new Student('Alice', ['math' => 5, 'biology' => 3]);
$student3 = new Student('Jimmy', 555);



// PART 2

class User
{
    public $first_name;
    public $last_name;
}

function getName(User $user){ // with type hinting (or extended class SuperUser)
    return $user->first_name;
}

$user1 = new User();
$user1->first_name = 'Alex';
//echo getName($user1) . "<hr />";
//echo "<br />" . getName('Gerard') . "<hr />"; // error

class SuperUser extends User
{
    // ...
}

$user2 = new SuperUser();
$user2->first_name = "Jack";
echo getName($user2) . "<hr />";



// PART 3 // method's signature

// public function myFuncName ( $myVarName1, array $objectArgName, $myVarName2, ... )
//   1       2         3            4          5         6              7        8
// 1: encapsulation access modificator
// 2: function
// 3: function name (UpperCamelCase)
// 4: argument variable
// 5: what's object type actually (Array or Object)
// 6: argument variable (array in this example)
// 7: argument variable
// 8: etc (next variable arguments)