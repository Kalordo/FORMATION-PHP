<?php 

// print_r($_GET);

if (isset($_GET["heroName"])) {
    $heroName = $_GET["heroName"];

    $choiceShortSentence = "Ton seigneur gît à terre, transpercé.";
    $eventDescription = "Simple écuyer, pris dans une guerre qui te dépasse. Ton seigneur vient d’être abattu sur le champ de bataille. Autour de toi : le feu, la boue, les cris.";
    $eventImage = "tower.png";
    $choices = [
        "Fuir par la forêt", 
        "Rejoindre les soldats survivants", 
        "Le piller et fuir seul"
    ];
    $eventNumber = 0;
    $color = "choice";
}
else if (isset($_GET["eventNumber"], $_GET["choice"])) {
    if ($_GET["eventNumber"] === "0" && $_GET["choice"] === "choice-0") {
        $choiceShortSentence = "Que fais-tu ?";
        $eventDescription = "Tu cours sans regarder derrière toi. Mais dans les bois, des paysans armés te coincent.";
        $eventImage = "tower.png";
        $choices = ["Tenter de parlementer"];
        $eventNumber = 1;
        $color = "choice";
    }
    else if ($_GET["choice"] === "choice-1") {
        $choiceShortSentence = "Que décides-tu ?";
        $eventDescription = "Tu rejoins les derniers hommes d’Alric. Un sergent te file une pique.";
        $eventImage = "tower.png";
        $choices = ["Fuir discrètement", "Rester combattre"];
        $eventNumber = 2;
        $color = "choice";
    }
    else if ($_GET["choice"] === "choice-2") {
        $choiceShortSentence = "Comment réagis-tu ?";
        $eventDescription = "Tu récupères la chevalière de ton maître et sa bourse. En quittant le champ, tu croises des mercenaires ennemis.";
        $eventImage = "tower.png";
        $choices = ["Mentir, dire que tu es un noble captif.", "Tenter de les soudoyer."];
        $eventNumber = 1;
        $color = "choice";
    }
} 

require "templates/choice.phtml";