<?php
session_start();
require '../connexion.php';

if (
    isset($_POST['email']) &&
    isset($_POST['password'])
) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = $db->prepare("SELECT * FROM users WHERE email = :email");
    $query->execute(['email' => $email]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        echo "<h1>Email incorrect</h1>";
    }
    
    if (!password_verify($password, $user['password'])) {
        echo "<h1>Mot de passe incorrect</h1>";
    }
    
    $_SESSION['user'] = [
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name']
    ];
    
    header('Location: ../index.php?route=home');
}