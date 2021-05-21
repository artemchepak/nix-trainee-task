<?php


namespace app\models;

use app\ActiveRecord;
class Registration extends ActiveRecord
{
    private $table = 'users';


    public function userRegistration()
    {
        $keys = [];
        $values = [];

        foreach ($_POST as $name => $value) {
            array_push($keys, $name);
            array_push($values, "'{$value}'");
        }
        $keysStr = implode(', ',$keys);
        $valuesStr = implode(', ', $values);
        $users = new Registration();
        $query = $this->insertQuery($this->table, $keysStr, $valuesStr);
        $this->executeQuery($query);
        header('Location: \registrationSuccess');
    }
}