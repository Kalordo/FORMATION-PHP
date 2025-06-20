<?php

require 'User.php';
require 'connexion.php';

$superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];

$user = new User(
    $superman['first_name'],
    $superman['last_name'],
    $superman['email']
);

$result = $pdo->query("SELECT * FROM users LIMIT 1");
$data = $result->fetch();

$user = new User($data['first_name'], $data['last_name'], $data['email']);
$user->setId($data['id']);