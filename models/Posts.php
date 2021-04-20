<?php


namespace app\models;

use PDO;

class Posts
{
    public \PDO $pdo;
    public static Posts $db;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=nix-trainee-task', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $this;
    }

    public function getPosts()
    {
        $statement = $this->pdo->prepare('SELECT * FROM posts ORDER BY create_date DESC');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}