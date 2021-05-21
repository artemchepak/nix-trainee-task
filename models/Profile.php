<?php


namespace app\models;
use PDO;
use app\ActiveRecord;
class Profile extends ActiveRecord
{
    private $table = 'users';

    public function viewProfile(){
        $id = $_COOKIE['id'];
        $profile = new Profile();
        $profile->select('*');
        $profile->from($this->table);
        $profile->where('id', "'{$id}'");
        $query = $profile->getQuery();
        $result = $profile->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC)[0];
}
}