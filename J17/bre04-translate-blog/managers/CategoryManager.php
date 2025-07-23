<?php

class CategoryManager extends AbstractManager
{
    public function findAll(): array
    {
        $query = $this->pdo->query("SELECT * FROM categories");
        $results = [];

        while ($row = $query->fetch()) {
            $category = new Category();
            $category->setId($row['id']);
            $category->setTitleEn($row['title_en']);
            $category->setDescriptionEn($row['description_en']);
            $category->setTitleFr($row['title_fr']);
            $category->setDescriptionFr($row['description_fr']);

            $results[] = $category;
        }

        return $results;
    }
}
