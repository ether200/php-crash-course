<?php

    # Static prop can be accessed via class method and not an instance;
    class User4 {
        # These can be private
        public static $nextId = 0;
        public $myId;

        public static function printId() {
            # With self you can access to static props without being instantiated
            # self only work WITH STATIC
            return "User id is: " . self::$nextId;
        }
    }


   echo User4::$nextId; # 0, can be accessed without an instance
   echo User4::$printId(); # 0
?>