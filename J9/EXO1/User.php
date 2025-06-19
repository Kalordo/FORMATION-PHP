<?php

class User {
    private int $id;
    private string $username;
    private string $password;

    public function __construct() {

    }

    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() : int {
        $this->id = $id;
    }

    public function setUserame(string $username) :void {
        $this->username = $username;
    }
    public function getUsername() : string {
        return $this->username;
    }

    public function setPassword(string $password) :void {
        $this->password = $password;
    }
    public function getPassword() : string {
        return $this->password;
    }
}