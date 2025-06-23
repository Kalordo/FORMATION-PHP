<?php

class Book {
  
  public function __construct(protected string $title, protected string $writer)
  {

  }

  public function getWriter() : string
  {
    return $this->writer;
  }

  public function setWriter(string $writer) : void
  {
    $this->writer = $writer;
  }

  public function getTitle() : string
  {
    return $this->title;
  }

  public function setTitle(string $title) : void
  {
    $this->title = $title;
  }
}

class ComicBook extends Book {
  
  public function __construct(private string $artist, string $title, string $writer)
  {
      parent::__construct($title, $writer);
  }

  public function getArtist() : string
  {
    return $this->artist();
  }

  public function setArtist(string $artist) : void
  {
    $this->artist = $artist;
  }
}

$book = new Book("Les Misérables", "Victor Hugo");

var_dump($book);

$comicBook = new ComicBook("Uderzo", "Asterix", "Goscinny");

var_dump($comicBook);