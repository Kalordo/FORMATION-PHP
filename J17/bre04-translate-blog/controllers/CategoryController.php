<?php

class CategoryController
{
    public function showAllCategories()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->findAll();
        require_once __DIR__ . '/../views/categories.php';
    }
}
