<?php

class User {
    public $name;
    public $email;

    public function welcomeMessage() {
        return "Have a good working day!";
    }
}

class Admin extends User {
    public $level;
}

$user = new User();
$user->name = "Ivan";
$user->email ="yoyo@gmail.com";

$admin = new Admin();
$admin-> name = "Teo";
$admin->email = "king@gmail.com";
$admin->level = "Super Admin";
$admin->welcomeMessage();

?>