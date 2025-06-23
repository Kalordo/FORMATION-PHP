<?php

class User {
    public function __construct(private int $id, private string $username, private string $password) {
    }

    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() : int {
        return $this->id;
    }

    public function setUsername(string $username) :void {
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