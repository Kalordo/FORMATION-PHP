<?php

class PostManager extends AbstractManager
{
    public function findAll(): array
    {
        $requete = $this->pdo->query("
            SELECT posts.*, categories.id AS category_id, categories.title_en AS category_title_en, categories.description_en AS category_description_en,
                   categories.title_fr AS category_title_fr, categories.description_fr AS category_description_fr
            FROM posts
            JOIN categories ON posts.category = categories.id
        ");

        $resultats = [];

        $lignes = $requete->fetchAll();

        foreach ($lignes as $ligne) {
            $categorie = new Category();
            $categorie->setId($ligne['category_id']);
            $categorie->setTitleEn($ligne['category_title_en']);
            $categorie->setDescriptionEn($ligne['category_description_en']);
            $categorie->setTitleFr($ligne['category_title_fr']);
            $categorie->setDescriptionFr($ligne['category_description_fr']);

            $publication = new Post();
            $publication->setId($ligne['id']);
            $publication->setTitleEn($ligne['title_en']);
            $publication->setExcerptEn($ligne['excerpt_en']);
            $publication->setTitleFr($ligne['title_fr']);
            $publication->setExcerptFr($ligne['excerpt_fr']);
            $publication->setCategory($categorie);

            $resultats[] = $publication;
        }

        return $resultats;
    }
}
