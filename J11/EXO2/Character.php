<?php

class Character {
    public int $life;
    public string $name;

    public function __construct() {
    }

    public function getLife() {
        return $this->life;
    }
    public function setLife($life) {
        $this->life = $life;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    protected function introduce() {
        return "Bonjour, je m'appelle " . $this->name . " !";
    }

    public function publicIntroduce(): string {
        return $this->introduce();
    }
}

class Warrior extends Character {
    private int $energy;

    public function __construct(int $life, string $name, int $energy) {
        $this->life = $life;
        $this->name = $name;
        $this->energy = $energy;
    }
    public function getEnergy() {
        return $this->energy;
    }
    public function setEnergy($energy) {
        $this->energy = $energy;
    }

    public function introduce() {
        return parent::introduce() . " Je suis un guerrier avec " . $this->life . "points de vie et " . $this->energy . "points d'energie !";
    }

}

class Mage extends Character {
    private int $mana;

    public function __construct(int $life, string $name, int $mana) {
        $this->life = $life;
        $this->name = $name;
        $this->mana = $mana;
    }
    public function getMana() {
        return $this->mana;
    }
    public function setMana($mana) {
        $this->mana = $mana;
    }

    public function introduce() {
        return parent::introduce() . " Je suis un mage avec " . $this->life . "points de vie et " . $this->mana . "points de mana !";
    }

}

$character = new Character();
$character->setName("Yohann");
$character->setLife(100);
$warrior = new Warrior(1000, "Garosh", 100);
$mage = new Mage(500, "Khadgar", 800);

echo $character->publicIntroduce() . "<br>";
echo $warrior->introduce() . "<br>";
echo $mage->introduce() . "<br>";