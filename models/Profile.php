<?php


namespace app\models;

use app\helpers\UtilHelper;
use PDO;
use app\ActiveRecord;

class Profile extends ActiveRecord
{
    private $table = 'users';

    public function viewProfile()
    {
        $id = $_COOKIE['id'] ?? null;
        if (!$id) {
            header('Location: /index');
            exit;
        }
        $profile = new Profile();
        $profile->select('*');
        $profile->from($this->table);
        $profile->where('id', "'{$id}'");
        $query = $profile->getQuery();
        $result = $profile->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public function updateProfile()
    {
        $id = $_COOKIE['id'] ?? null;
        if (!$id) {
            header('Location: /index');
            exit;
        }

        $values = [];

        foreach ($_POST as $name => $value) {
            array_push($values, $name . " = '{$value}'");
        }

        if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
            $image = $_FILES['image'];
            $randomFolder = UtilHelper::randomString(8);
            if (!is_dir(__DIR__ . '/../public/images')) {
                mkdir(__DIR__ . '/../public/images');
            }
            mkdir(__DIR__ . "/../public/images/{$randomFolder}");
            move_uploaded_file($image['tmp_name'], __DIR__ . "/../public/images/{$randomFolder}/{$image['name']}");

            array_push($values, "image = '../images/{$randomFolder}/{$image['name']}'");
        }
        $valuesStr = implode(', ', $values);
        $update = new Registration();
        $query = $this->updateQuery($this->table, $valuesStr, $id);
        $this->executeQuery($query);
        header('Location: /profile');
    }
}
