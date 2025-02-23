<?php

class Author {
    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getGender() {
        return $this->gender;
    }

    // Add the toString() method
    public function toString() {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}