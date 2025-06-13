<?php
session_start();
require '../connexion.php';

if (
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $query = $db->prepare("INSERT INTO users (first_name, last_name, email, password) 
                                VALUES (:first_name, :last_name, :email, :password)");
    $query ->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':password' => $password
    ]);
    header('Location: ../index.php?route=home');
}
?>