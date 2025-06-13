<?php

function categoryPage() : void
{
    // echo "controllers/category.php : on arrive dans le controller des categories<br><br>";
    $categoryId = $_GET["category"];
    // echo "controllers/category.php : on récupère l'id de la Categorie : $categoryId depuis \$_GET<br><br>";

    require "managers/category_manager.php";
    
    $categoryPosts = getPostsForCategory($categoryId);
    // var_dump($categoryPosts);
    
    $category = getCategory($categoryId);
    // var_dump($category);
    
    // echo "controllers/category.php : j'ai récupéré la liste des posts de la category<br><br>";

    $template = "templates/category.phtml";
    // echo "controllers/category.php : je défini que je veux afficher le template category.phtml<br><br>";
    require "templates/layout.phtml";
}

?>