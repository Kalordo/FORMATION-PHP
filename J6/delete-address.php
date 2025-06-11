<?php

require 'connexion.php';

$id = $_POST['id'];

$db->exec("DELETE FROM address WHERE id = $id");

?>