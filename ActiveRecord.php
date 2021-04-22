<?php


namespace app;

use PDO;


class ActiveRecord
{
    public \PDO $pdo;
    public $select;
    public $from;
    public static ActiveRecord $activeRecord;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;port=3306;dbname=nix-trainee-task', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$activeRecord = $this;
    }

    public function select($select)
    {
        $this->select = 'SELECT ' . $select;
    }

    public function from($from)
    {
        $this->from = ' FROM ' . $from;
    }

    public function getQuery()
    {
        $query = $this->select . $this->from;
        return $query;
    }

    public function executeQuery($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}