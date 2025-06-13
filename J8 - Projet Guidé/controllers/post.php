<?php

function postPage() : void
{
    // print_r($_GET);
    $postId = $_GET["post"];

    require "managers/post_manager.php";

    $post = getPost($postId);
    //var_dump($post);

    $template = "templates/post.phtml";
    require "templates/layout.phtml";
}

?>