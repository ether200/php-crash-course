<?php

    # Can not be extended
    final class Usuario {
        public $name = "John";
        public $age;

        # Can't be overwritten
        final public function printName($name) {
            return "My name is " . $name;
        }
    }

    // class Manager extends Usuario {
    //     public $name = "David";
    // final public function printName($name) {
       // return "My name is " . $name;
    // } -> WOULDN'T WORK
    // }

    // $manager = new Manager(); # throw an error;
?>