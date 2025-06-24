<?php

class PageController {
    public function home($route): void {
        require __DIR__ . '/../templates/home.phtml';
    }

    public function about($route): void {
        require __DIR__ . '/../templates/about.phtml';
    }

    public function contact($route): void {
        require __DIR__ . '/../templates/contact.phtml';
    }

    public function categorie($route, $categorie): void {
        $categorie = htmlspecialchars($categorie);
        require __DIR__ . '/../templates/categorie.phtml';
    }

    public function article($route, $article): void {
        $article = htmlspecialchars($article);
        require __DIR__ . '/../templates/article.phtml';
    }

    public function notFound($route): void {
        require __DIR__ . '/../templates/notFound.phtml';
    }
}