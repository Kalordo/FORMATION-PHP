<?php

session_start();

if (!isset($_SESSION['pseudo'])) {
    echo "Bienvenue " . "invité";
} else {
    echo "Bienvenue " . htmlspecialchars($_SESSION['pseudo']);
}

?>