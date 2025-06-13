<?php

$password = $_POST['password'];
$hash = $_POST['hash'];

if(password_verify($password, $hash)) {
	echo "Mot de passe correct";
} else {
	echo "Mot de passe erroné";
}

?>