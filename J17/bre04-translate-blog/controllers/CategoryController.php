<?php

class CategoryController
{
    public function index()
    {
        $this->showAllCategories();
    }
    public function showAllCategories()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->findAll();
        require_once __DIR__ . '/../views/categories.php';
    }
}
