<?php

session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
    
var_dump($_SESSION);

?>