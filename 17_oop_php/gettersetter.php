<?php

    # getter and setter are mostly used to access private and protected props
    class User3 {
        private $name;
        private $age;

        public function __construct($name, $age)
        {
            $this->name=$name;
            $this->age=$age;
        }

        // # getter
        // public function getName() {
        //     return $this->name;
        // }
        // # setter
        // public function setName($name) {
        //     $this->name = $name;
        // }

        // # getter
        // public function getAge() {
        //     return $this->age;
        // }
        // # setter
        // public function setAge($age) {
        //     $this->name = $age;
        // }

        // __GET Magic method aka global getter
        public function __get($property){
            # if the property exist
            if (property_exists($this, $property)) {
                return $this->$property;
            } 

            
        }

        // __SET Magic method aka global setter
        public function __set($property, $value){
            # if the property exist
            if (property_exists($this, $property)) {
                return $this->$property = $value;
            } 


        }

        public function __toString()
        {
            return "Name: " . $this->name . "<br> Age: " . $this->age;
        }

    }

    $user = new User3('Ivan', '26');
    $user->__set('age', '25');
    echo $user->__get('name'); # Ivan;
    echo $user->__get('age'); # 25;

    # Thanks to the toStrng method we can print the object
    # echo $user;
?>