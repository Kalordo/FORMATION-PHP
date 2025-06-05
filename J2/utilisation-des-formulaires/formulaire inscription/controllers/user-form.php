<?php
echo "Email : " . $_POST['email'] . " | Mot de passe : " . $_POST['password'] . 
 " | Confirmation MDP : " . $_POST['confPassword'];
 
 if ($_POST['password'] === $_POST['confPassword']) {
    echo "<br>Vérification des mots de passe : OK";
 } else {
    echo "<br>Vérification des mots de passe : NOK";
 };
 
 if (isset($_POST['newsletter'])) {
    echo "<br>Newsletter : Oui";
 } else {
    echo "<br>Newsletter : Non";
 };
?>
