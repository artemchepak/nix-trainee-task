<?php


namespace app\models;

use PDO;
use app\ActiveRecord;
class Posts extends ActiveRecord
{
    private $table = 'posts';

    public function getPosts()
    {
        $posts = new Posts();
        $posts->select('*');
        $posts->from($this->table);
        $queryPosts = $posts->getQuery();
        $result = $posts->executeQuery($queryPosts);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}