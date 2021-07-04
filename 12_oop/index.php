<?php

// What is class and instance

require_once "Person.php";
require_once "Student.php";

$person = new Person("Ivan", "M");
// $person -> name = 'Ivan';
// $person -> surname = 'M';
$person->setAge(26);
echo '<pre>';
var_dump($person);
echo '</pre>';
echo $person->getAge() . '<br>';

$person2 = new Person("What", "Ya doing");
// $person2->name = 'What';
// $person2->surname = 'Ya doing';

$person2->setAge(22);
echo '<pre>';
var_dump($person2);
echo '</pre>';

echo Person::$counter . '<br>'; # Access to static prop;


// Create Person class in Person.php

$student = new Student("Ivanoff", "M", "123");
echo '<pre>';
var_dump($student);
echo '</pre>';

// Create instance of Person

// Using setter and getter