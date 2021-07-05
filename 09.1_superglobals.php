<?php

/*Super global are variables from php that can be accessed anywhere in your code
Mainly used to get and store information from one page to another.
Most important ones:
GLOBAL # Defines variables that can be used anywhere in the script
$_POST # Collect values when submit a  form
$_GET # Used to collect data from the form after submitting or read querys
$_SERVER # Shows info about headers, location, etc
$_COOKIE # Track cookies(small file stored in pc);
$_SESSION # Store data, session is closed whenever user closes browser
$_FILES # Upload files and save
*/

$x = 100;
$y = 200;

function add() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();

echo $z;



