<?php

class Router {
    public function handleRequest(array $get): void {
        $controller = new PageController();

        if (!isset($get['route'])) {
            $route = "home";
            $controller->home($route);
        } else if ($get['route'] === "a-propos") {
            $route = "a-propos";
            $controller->about($route);
        } else if ($get['route'] === "contact") {
            $route = "contact";
            $controller->contact($route);
        } else if ($get['route'] === "categorie" && isset($get['categorie'])) {
            $route = "categorie";
            $categorie = $get['categorie'];
            $controller->categorie($route, $categorie);
        } else if ($get['route'] === "article" && isset($get['article'])) {
            $route = "article";
            $article = $get['article'];
            $controller->article($route, $article);
        } else {
            $route = "notFound";
            $controller->notFound($route);
        }

        require __DIR__ . '/../templates/layout.phtml';
    }
}