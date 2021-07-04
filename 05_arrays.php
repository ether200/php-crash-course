<?php

// Create array

$fruits = ["Banana", "Apple", "Orange"];
# $fruits = array()

// Print the whole array

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1] . '<br>';


// Set element by index

$fruits[0] = 'Peach';
echo $fruits[0];

// Check if array has element at index 2

isset($fruits[3]); # false;

// Append element

$fruits[] = 'Banana'; # Appending to the next or last index
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Print the length of the array

echo count($fruits). '<br>';

// Add element at the end of the array

array_push($fruits, 'Foo');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Remove element from the end of the array

array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Add element at the beginning of the array

array_unshift($fruits, 'Bar');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Remove element from the beginning of the array

array_shift($fruits);

// Split the string into an array

$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '<pre>';

// Combine array elements into string

echo implode(", ", $fruits);

// Check if element exist in the array

echo '<pre>';
var_dump(in_array('Apple', $fruits)); # true
echo '</pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search('Apple', $fruits)); # int(1) or false if it doesn't find
echo '</pre>';

// Merge two arrays

$vegetable = ["Potato", "Cucumber"];

echo '<pre>';
var_dump(array_merge($fruits, $vegetable)); # order matters
var_dump([...$fruits, ...$vegetable]); 
echo '</pre>';


// Sorting of array (Reverse order also)

sort($fruits);
echo '<pre>';
var_dump($fruits); 
echo '</pre>';

rsort($fruits);
echo '<pre>';
var_dump($fruits); 
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'Ivan',
    'surname' => 'M',
    'age' => 26,
    'hobbies' => ['Music', 'Fighting']
];

echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key

echo $person['name']. '<br>';

// Set element by key

$person['work'] = 'NotFound';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

// if (!isset($person['address'])) {
//     $person['address'] = 'unknown';
// }

$person['address'] ??= 'unknown'; # it's the same sentence below
$person['address'] = $person['address'] ?? 'unknown'; # if it's not set it to unknown

// Check if array has specific key

# isset($person[address]); # true

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

ksort($person); # sort by key
# asort($person) # sort by value
echo '<pre>';
var_dump($person);
echo '</pre>';


// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';

