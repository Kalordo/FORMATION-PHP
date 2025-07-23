<?php

class PostController
{
    public function index()
    {
        $this->showAllPosts();
    }
    public function showAllPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->findAll();
        require_once __DIR__ . '/../views/posts.php';
    }
}
