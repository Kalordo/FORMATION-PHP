<?php

function getPost(int $postId) : array
{
    require __DIR__ . "/../connexion.php";
    
    $query = $db->prepare("SELECT * FROM posts WHERE posts.id = :postId");
    $parameters = [
        "postId" => $postId 
    ];
    $query->execute($parameters);
    
    $post = $query->fetch(PDO::FETCH_ASSOC);
    
    return $post;
}

?>