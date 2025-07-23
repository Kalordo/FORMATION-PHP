<?php

abstract class AbstractManager
{
    protected PDO $pdo;

    public function __construct()
    {
        $host = 'db.3wa.io';
        $dbname = 'yohannleperson_translate_blog';
        $user = 'yohannleperson';
        $pass = '5eeae6eea83db7d74811ce859cb08bb2';

        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}
