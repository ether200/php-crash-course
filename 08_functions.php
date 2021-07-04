<?php

// Function which prints "Hello I am Zura"

function hello()
{
    echo "Hello I'm Ivan <br>";
}

hello();

// Function with argument

function helloWithName($name)
{
    return "Hello $name person";
}

echo helloWithName('Soka') . '<br>';

// Create sum of two functions

function sum ($a, $b) {
    return $a + $b;
}

echo sum(4, 5) . "<br>";

// Create function to sum all numbers using ...$nums

// function sumManyArgs (...$nums) {
//     if (!is_array($nums)) {
//         return $nums;
//     } else {
//         $totalSum = 0;
//         foreach($nums as $value) $totalSum += $value;
//         return $totalSum;
//     }
// }

// echo sumManyArgs(6);

// Arrow functions

function sumWithArrowFn (...$nums)
{
    return array_reduce($nums, fn($carry, $number) => $carry + $number);
}

echo sumWithArrowFn(1, 2, 3, 4, 5, 6);
