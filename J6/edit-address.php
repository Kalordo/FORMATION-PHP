<?php

require 'connexion.php';

$id = $_POST['id'];
$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$db->exec("UPDATE address SET street='$street', city='$city', zipcode='$zipcode' WHERE id=$id");

?>