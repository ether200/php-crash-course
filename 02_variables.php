<?php

// What is a variable

# Stores a value in memory, they don't have type. To declare them you use ${name}

// Variable types

/* 
    String
    Integer
    Float/Double
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables

$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>'; # the '.' is concatenating
echo $age . '<br>';
echo $isMale . '<br>'; # whenever true transform to string it prints an 1, false shows nothing.
echo $height . '<br>';
echo $salary . '<br>'; # null doesn't print into the screen;

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable

var_dump($name); # var_dump fn prints all the info you need from a variable = string(4) "Zura"

// Change the value of the variable

$name = false;

// Print type of the variable

echo gettype($name). '<br>'; # prints out boolean

// Variable checking functions
is_string($name); # false;
is_int($age); # true
is_bool($isMale); # true
is_double($height); # true


// Check if variable is defined

isset($name); # true
isset($address); #false

// Constants

define('PI', 3.14); # declare a constant;
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX . '<br>';
