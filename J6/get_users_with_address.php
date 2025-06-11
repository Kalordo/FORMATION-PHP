<?php

require 'connexion.php';

$query = $db->prepare('SELECT * FROM users JOIN address ON users.id = address.id');
$query->execute();

$usersAddress = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($usersAddress);

?>