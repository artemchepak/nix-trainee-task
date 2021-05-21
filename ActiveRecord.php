<?php


namespace app;

use PDO;


class ActiveRecord
{
    public \PDO $pdo;
    public $select;
    public $from;
    public $where;
    public $and;
    public $insert;
    public $value;
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

    public function where($key, $value){
        $this->where = ' WHERE ' . $key . " = " . $value;
    }

    public function and($key, $value){
        $this->and = ' AND ' . $key . " = " . $value;
    }

    public function insertQuery($table, $key, $value)
    {

//
//      'INSERT INTO ' . $table . '(' . $key . ') VALUES (' . $value . ')';
        return ('INSERT INTO ' . $table . '(' . $key . ') VALUES (' . $value . ')');


    }


    public function getQuery()
    {
        $query = $this->select . $this->from . $this->where . $this->and;
        return $query;
    }

    public function saveQuery($prepare){
        $query = $this->insert;
        return $query;
    }


    public function executeQuery($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }

//$statement = $pdo->prepare("INSERT INTO test (title) VALUES (:title)");
//$statement->bindValue(':title', $title);
//$statement->execute();
//header('Location: \registrationSuccess');


}