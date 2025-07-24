<?php


class Post
{
    private string $title;
    private string $content;
    private string $slug;
    private bool $private = false;

    public function __construct(string $title, string $content, string $slug)
    {
        if (empty($title)) {
            throw new InvalidArgumentException("Le titre ne peut pas être vide.");
        }
        if (empty($content)) {
            throw new InvalidArgumentException("Le contenu ne peut pas être vide.");
        }
        if (empty($slug)) {
            throw new InvalidArgumentException("Le slug ne peut pas être vide.");
        }
        if (!preg_match('/^[a-zA-Z0-9\-]+$/', $slug)) {
            throw new InvalidArgumentException("Le slug ne contient pas que des caractères URL safe.");
        }
        $this->title = $title;
        $this->content = $content;
        $this->slug = $slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function isPrivate(): bool
    {
        return $this->private;
    }
    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    //VALIDATION

    public function emptyTitle(string $title): void
    {
        if (empty(trim($title))) {
            throw new InvalidArgumentException("Le titre est vide");
        }
    }
    public function emptyContent(string $content): void
    {
        if (empty(trim($content))) {
            throw new InvalidArgumentException("Le contenu est vide");
        }
    }
    public function emptySlug(string $slug): void
    {
        if (empty(trim($slug))) {
            throw new InvalidArgumentException("Le slug est vide");
        }
    }
    public function validChar(string $slug): void
    {
        if (!preg_match('/^[a-zA-Z0-9\-_.~]+$/', $slug)) {
            throw new InvalidArgumentException("Le slug contient des caractères non valides.");
        }
    }
}
