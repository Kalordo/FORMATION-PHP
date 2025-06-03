<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
    
    function majeur(array $user) : string {
        if ($user["age"] >= 18) {
            return "Majeur";
        } else {
            return "Mineur";
        }
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>
            Liste des utilisateurs
        </h1>
        <ul>
            <?php foreach($users as $user) {?>
                <li><?= $user["firstName"] . " " . $user["lastName"]. " - " . majeur($user) ?></li>
            <?php } ?>
        </ul>
    </body>
</html>