<?php

$age = 20;
$salary = 300000;

// Sample if

// if ($age === 20) {
//     echo "1";
// }

// Without circle braces

// if ($age === 20) echo "2";

// Sample if-else

// if ($age > 20) {
//     echo "1";
// } else {
//     echo "2";
// }

// Difference between == and ===

if ($age == 20) {
    echo "1". '<br>';
}

# Same as JS, == doesn't value equaility unlike ===
// $age == 20; # true
// $age == '20'; # true

// $age === 20; # true
// $age === '20'; # false

// if AND

if ($age == 20 && $salary === 300000) {
    echo 'Do Something';
}

// if OR

if ($age > 20 || $salary === 300000) {
    echo 'Do Something AGAIN';
}


// Ternary if

echo $age < 22 ? 'Young' : 'Old';


// Short ternary

$myAge = $age ?: '18'; # if age exist is gonna be 18;

// Null coalescing operator

$myName = isset($name) ? $name : 'John';
echo $myName;

#shorthand
// $myName = $name ?? 'John';

// switch

$userRole = 'admin'; // editor, user, admin;

switch($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}
