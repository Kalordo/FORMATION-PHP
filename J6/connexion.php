<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "yohannleperson_phpj6";
$connexionString =
"mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "yohannleperson";
$password = "5eeae6eea83db7d74811ce859cb08bb2";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>