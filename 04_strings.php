<?php

// Create simple string
$name = 'Ivan';
$string = 'Hello I am ' . $name . '. I am 26';
$string2 = "Hello I am $name . I am 26"; # with double quotes you can add variables
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo 'Hello '.' World ' .' and PHP' . '<br>';

// String functions
$string = "     Hello World     ";

echo "1 - " . strlen($string) . '<br>'; #string length
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>'; # left trim
echo "4 - " . rtrim($string) . '<br>'; # right trim
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>'; # revert strings
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst($string) . '<br>'; # uppercase first str
echo "10 - " . lcfirst($string) . '<br>'; # lowercase first str
echo "11 - " . ucwords($string) . '<br>'; # uppercase every single word
echo "12 - " . strpos($string, 'world') . '<br>'; # looks for 'world' which doesn't exist since World
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8, /*third argunment up to chars*/ ) . '<br>'; # takes from position 8 to the end of the string
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>'; # Must be exact, DOESN'T IGNORE CASE
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>'; # Doesn't have to be exact, IGNORE CASE

// Multiline text and line breaks

$longText = "
    Hello, my name is Ivan
    I am 26,
    I love potosi
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>'; # Creates br tag whenever it finds a new line

// Multiline text and reserve html tags

$longText2 = "
    Hello, my name is <b>Ivan</b>
    I am <b>26</b>,
    I love pepu
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';
echo htmlentities($longText) . '<br>';
echo nl2br(htmlentities($longText)) . '<br>';

// https://www.php.net/manual/en/ref.strings.php