<?php

require 'connexion.php';

$query = $db->prepare('SELECT * FROM users JOIN address ON users.id = address.id WHERE users.id =:id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);

$userAddress = $query->fetch(PDO::FETCH_ASSOC);

var_dump($userAddress);

?>