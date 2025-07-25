<?php

class User
{
    protected string $email;
    protected string $password;

    public function __construct(){

    }

    public function login() : array {
    	return ["login" => $this->email, "password" => $this->password];
    }
}

class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password){
    	$this->email = $email;
    	$this->password = $password;
    }

    public function addBookToFavorites(string $book): array {
    	$this->favoriteBooks[] = $book;

    	return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array {
    	foreach($this->favoriteBooks as $key => $favoriteBook)
    	{
    		if($favoriteBook === $book)
    		{
    			unset($this->favoriteBooks[$key]);
    		}
    	}

    	return $this->favoriteBooks;
    }
}

$reader = new Reader ("exercice@example.com", "mdp123456789");

$favorites = $reader->addBookToFavorites("La bande à Picsou");
$favorites = $reader->addBookToFavorites("Gaston Lagaffe");

print_r($favorites);

$favorites = $reader->removeBookFromFavorites("La bande à Picsou");

print_r($favorites);

$loginInfos = $reader->login();

print_r($loginInfos);