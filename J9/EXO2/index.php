<?php

require 'Character.php';

$character = new Character(1);

echo $character->getFullName() . "<br>";

$character->setFirstName("Sarah");
$character->setLastName("Connor");

echo $character->getFullName();