<?php

class Users {
    private ?int $id;

    public function __construct(private string $firstName, private string $lastName, private string $email) {
        //mettre l'id en null par defaut
    }
    //puis, dernière étape de l'exo 1 (getters, setters)

}