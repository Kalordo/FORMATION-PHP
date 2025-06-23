<?php

$host = "db.3wa.io";
$dbname = "yohannleperson_pooj1";
$username = "yohannleperson";
$password = "5eeae6eea83db7d74811ce859cb08bb2";

$dsn = "mysql:host=$host;dbname=$dbname";

$pdo = new PDO($dsn, $username, $password);