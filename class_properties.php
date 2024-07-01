<?php

class Person
{

    var $first_name;
    var $last_name;
    var $age;
    var $work;

    function say_hello()
    {
    }
}


$person1 = new Person();
$person1->first_name = "John";
$person1->last_name = 'Doe';
$person1->age = 23;
$person1->work = 'Developer';

$person2 = new Person();
$person2->first_name = "Min";
$person2->last_name = 'Khant';
$person2->$age = 26;
$person2->$work = 'Software Engineer';

echo $person1->say_hello();

echo $person1->first_name . "" . $person1->last_name . " is " . $person1->age . " years old and works as a " . $person1->work . "<br>";


$class_vars = get_class_vars('Students');
echo "Class vars: <br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";
