<?php

function homePage() : void
{
    require "managers/category_manager.php";
    
    $data = [];
    
    $categories = getCategories();
    
    foreach($categories as $category) {
        $posts = getPostsForCategory($category['id']);
        
        $data[] = [
            "category" => $category,
            "posts" => $posts
        ];
    }
    
    // var_dump($data);

    $template = "templates/home.phtml";
    require "templates/layout.phtml";
}

?>