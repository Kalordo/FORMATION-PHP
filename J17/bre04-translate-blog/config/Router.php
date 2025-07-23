<?php


class Router
{
    public function handleRequest()
    {
        $route = $_GET['route'] ?? 'posts';

        if ($route === 'posts') {
            $controller = new PostController();
            $controller->showAllPosts();

        } elseif ($route === 'categories') {
            $controller = new CategoryController();
            $controller->showAllCategories();

        } else {
            $controller = new CategoryController();
            $controller->showAllCategories();
        }
    }
}





































































































































