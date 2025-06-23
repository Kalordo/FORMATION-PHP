<?php

require 'User.php';

$user1 = new User (1, "admin", "admin");


$user2 = new User(2, "user", "user");

echo "id : " . $user1->getId() . "<br>";
echo "username : " . $user1->getUsername() . "<br>";
echo "password : " . $user1->getPassword() . "<br>";

echo "id : " . $user2->getId() . "<br>";
echo "username : " . $user2->getUsername() . "<br>";
echo "password : " . $user2->getPassword() . "<br>";