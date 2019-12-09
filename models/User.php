<?php

class User {
    protected $name;
    protected $email;
    // constructor
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}