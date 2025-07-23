<?php

class Category
{
    private int $id;
    private string $title_en;
    private string $description_en;
    private string $title_fr;
    private string $description_fr;

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getTitleEn(): string {
        return $this->title_en;
    }
    public function setTitleEn(string $title_en): void {
        $this->title_en = $title_en;
    }

    public function getDescriptionEn(): string {
        return $this->description_en;
    }
    public function setDescriptionEn(string $description_en): void {
        $this->description_en = $description_en;
    }

    public function getTitleFr(): string {
        return $this->title_fr;
    }
    public function setTitleFr(string $title_fr): void {
        $this->title_fr = $title_fr;
    }

    public function getDescriptionFr(): string {
        return $this->description_fr;
    }
    public function setDescriptionFr(string $description_fr): void {
        $this->description_fr = $description_fr;
    }
}
