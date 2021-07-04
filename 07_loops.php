<?php

// while

// while(true) {

// }

// Loop with $counter
$counter = 0;
// while ($counter < 10) {
//     echo $counter . '<br>';

//     // if ($counter === 5) {
//     //     break;
//     // }

//     $counter++;
// }

// do - while

# executes at least once

// do {
//     echo $counter . '<br>';
//     $counter++;
// } while ($counter < 10);

// for

for ($i = 0; $i < 10; $i++) {
    echo $i. '<br>';
}

$fruits = ["Banana", "Apple", "Orange"];

// foreach

foreach ($fruits as $i => $fruit) {
    echo $fruit . " index $i" . "<br>";
}

// Iterate Over associative array.

$person = [
    'name' => 'Ivan',
    'surname' => 'M',
    'age' => 26,
    'hobbies' => ['Music', 'Fighting']
];

foreach($person as $key => $value) {

    if (is_array($value)) {
        $value = implode(", ", $value);
    }

    echo "Key: $key Value: $value. <br> " ;
}