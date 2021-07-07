<?php

# Define class
class User {

    // Properties
    public $name;

    // Methods
    public function sayHello() {
        return "Hello " . $this->name;
    }
}

// Instantiate user object from "User class"
$user = new User();
$user->name = 'Ivanoff'; // Since it's public it can be modified
// echo $user->name; // Access to props in object
echo "<br>";
echo $user->sayHello();

?>