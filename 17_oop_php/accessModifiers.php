<?php

// Access modifiers = Public, Private, Protected
class User {
    // public $name; # can be modified
    private $name; # Only accesible within the class
    #protected $name # Same as private, but it can be inhereted

    private function sayHello(){
        return "Hello";
    }
}

$user = new User();
// $user->name = "Ivan";

// echo $user->name;

?>