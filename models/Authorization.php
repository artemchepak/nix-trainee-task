<?php


namespace app\models;

use PDO;
use app\ActiveRecord;
class Authorization extends ActiveRecord
{
    private $table = 'users';

    public function userAuthotization(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $userAuth = new Authorization();
        $userAuth->select('*');
        $userAuth->from($this->table);
        $userAuth->where('login', "'{$login}'");
        $userAuth->and('password', "'{$password}'");
        $queryAuth = $userAuth->getQuery();
        $result = $userAuth->executeQuery($queryAuth);
        $user = $result->fetchAll(PDO::FETCH_ASSOC)[0];

        setcookie('user', $user['name'], time() + 86400);
        setcookie('id', $user['id'], time() + 86400);
        header('Location: /');
    }

    public function clearCookie(){
        setcookie('user',"", time() - 86400);
        setcookie('id',"", time() - 86400);
        header('Location: /');
    }

}