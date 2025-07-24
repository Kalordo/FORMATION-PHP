<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/User.php'; 

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testEmptyFirstName(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Le prénom ne peut pas être vide.");
        new User("", "LastName", "Email", "Password", "Roles");
    }

    public function testEmptyContent(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Le nom ne peut pas être vide");
        new User("FirstName", "", "Email", "Password", "Roles");
    }

    public function testInvalidEmail() {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Adresse email invalide");
        new User("FirstName", "LastName", "adresse-invalide", "Password", "Roles");
    }
}