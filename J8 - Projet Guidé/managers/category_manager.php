<?php

function getCategory(int $categoryId) : array
{
    require __DIR__ . "/../connexion.php";
    
    $query = $db->prepare("SELECT * FROM categories WHERE categories.id = :categoryId");
    $parameters = [
        'categoryId' => $categoryId
    ];
    $query->execute($parameters);
    $category = $query->fetch(PDO::FETCH_ASSOC);

    return $category;
}

function getCategories() : array
{
    require __DIR__ . "/../connexion.php";
    
    $query = $db->prepare("SELECT * FROM categories");
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $categories;
}

function getPostsForCategory(int $categoryId) : array
{
    // echo "managers/category_manager.php : on appelle de manager pour avoir la liste des posts de la categorie<br><br>";
    
    require __DIR__ . "/../connexion.php";
    
    // echo "managers/category_manager.php : je me connecte à la base de données<br><br>";  
    
    $query = $db->prepare("SELECT posts.*, medias.url, medias.alt FROM posts JOIN medias ON posts.image = medias.id WHERE posts.category = :categoryId");
    $parameters = [
        "categoryId" => $categoryId
    ];
    $query->execute($parameters);
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    
    // echo "managers/category_manager.php : je récupère les données via la PDO<br><br>";    
    
    return $posts;
}
?>