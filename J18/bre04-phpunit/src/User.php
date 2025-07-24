<?php

class User {

    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private array $roles;

    public function __construct(string $firstName, string $lastName, string $email, string $password, array $roles = ['ANONYMOUS']) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setRoles($roles);
    }
    
    public function getFirstName(): string {
        return $this->firstName;
    }
    public function setFirstName(string $firstName): void {
        if (empty(trim($firstName))) {
            throw new InvalidArgumentException("Le prénom ne peut pas être vide.");
        }
        $this->firstName = $firstName;
    }
    
    public function getLastName(): string {
        return $this->lastName;
    }
    public function setLastName(string $lastName): void {
        if (empty(trim($lastName))) {
            throw new InvalidArgumentException("Le nom ne peut pas être vide.");
        }
        $this->lastName = $lastName;
    }
    
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email invalide.");
        }
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }
    public function setPassword(string $password): void {
        if (
            strlen($password) < 8 ||
            !preg_match('/[A-Z]/', $password) ||
            !preg_match('/[0-9]/', $password) ||
            !preg_match('/[\W]/', $password)
        ) {
            throw new InvalidArgumentException("Le mot de passe doit faire au moins 8 caractères, contenir une majuscule, un chiffre et un caractère spécial.");
        }
        $this->password = $password;
    }

    public function getRoles(): array {
        return $this->roles;
    }
    public function setRoles(array $roles): void {
        $validRoles = ['ANONYMOUS', 'USER', 'ADMIN'];
        $roles = array_unique($roles);

        foreach ($roles as $role) {
            if (!in_array($role, $validRoles)) {
                throw new InvalidArgumentException("Rôle invalide : $role.");
            }
        }
        if (in_array('USER', $roles) || in_array('ADMIN', $roles)) {
            $roles = array_diff($roles, ['ANONYMOUS']);
        }
        if (empty($roles)) {
            $roles = ['ANONYMOUS'];
        }
        $this->roles = array_values($roles);
    }
}