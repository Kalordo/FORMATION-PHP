<?php

session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}
if (isset($_GET['setlang']) && in_array($_GET['setlang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['setlang'];
}

require './config/autoload.php';

$router = new Router();
$router->handleRequest();
