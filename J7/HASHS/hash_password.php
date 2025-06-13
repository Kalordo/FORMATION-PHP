<?php

$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Mot de passe avant chiffrage: $password<br>";
echo "Mot de passe une fois chiffré: $hash";

?>