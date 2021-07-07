<?php

    # Constructor runs everytime a class is instantiate;
    class User2 {
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        // The DESTRUCT WILL ALWAYS RUN LAST, LIKE A CLEANUP FN
        public function __destruct()
        {
            echo "Destructor works!";
        }

        public function myAge() {
            return "My age is " . $this->age;
        }
    };

    $user = new User2('Ivan', '26');

?>