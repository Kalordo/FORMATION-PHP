<?php

/*url possibles :
index.php
index.php?route=category&category=1
index.php?route=post&post=1
index.php?route=toutautrechose
*/

// echo "index.php : récupération du \$_GET<br><br>";

if (isset($_GET["route"]) && $_GET["route"] === "category" && isset($_GET["category"])){
    // echo "index.php : on veut accéder à la page Catégorie pour la Catégorie 1<br><br>";
    require "controllers/category.php";
    categoryPage();
}
else if (isset($_GET["route"]) && $_GET["route"] === "post" && isset($_GET["post"])){
    require "controllers/post.php";
    postPage();
}
else {
    require "controllers/home.php";
    homePage();
}

?>