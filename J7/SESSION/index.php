<?php

session_start();

?>

<form action="nickname.php" method="POST">
    <label for="pseudo">Entrez votre pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" required>
    <button type="submit">Valider</button>
    <a href="logout.php">Déconnexion</a>
</form>