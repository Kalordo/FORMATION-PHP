<?php

class PostController
{
    public function showAllPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->findAll();
        require_once __DIR__ . '/../views/posts.php';
    }
}
