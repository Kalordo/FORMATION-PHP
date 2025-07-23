<?php

class Router
{
    public function handleRequest()
    {
        $route = $_GET['route'] ?? 'posts';

        if ($route === 'posts') {
            $controller = new PostController();
            $controller->index();

        } elseif ($route === 'categories') {
            $controller = new CategoryController();
            $controller->index();

        } else {
            $controller = new CategoryController();
            $controller->index();
        }
    }
}





































































































































