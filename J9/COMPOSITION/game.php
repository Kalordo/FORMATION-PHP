<?php

require "Character.php";

$ragnar = new Character("Ragnar");
$sword = new Weapon("Sword", 10);

$ragnar->setWeapon($sword);

echo "Nom personnage : " . $ragnar->getName() . "<br>";
echo "Nom arme : " . $ragnar->getWeapon()->getName() . "<br>";
echo "Dégâts " . $ragnar->getWeapon()->getDamages() . "<br>";
echo "Résultat du combat : " . $ragnar->fight(); 