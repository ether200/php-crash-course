<?php

class Person {
    public string $name;
    public ?string $surname; # with ? accepts null values
    private int $age; # cannot be directly accesed out of the class
    public static int $counter = 0; # belong to the class itself NOT THE INSTANCE
    // protected # can't be set outside the class;

    # executes when the instance is created
    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++; # We increase counter whenever an instance is created
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }
}