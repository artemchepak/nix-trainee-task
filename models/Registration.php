<?php

namespace app\models;

use app\ActiveRecord;
use app\helpers\UtilHelper;

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
        if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
            $image = $_FILES['image'];
            $randomFolder = UtilHelper::randomString(8);
            if (!is_dir(__DIR__ . '/../public/images')) {
                mkdir(__DIR__ . '/../public/images');
            }

            mkdir(__DIR__ . "/../public/images/{$randomFolder}");
            move_uploaded_file($image['tmp_name'], __DIR__ . "/../public/images/{$randomFolder}/{$image['name']}");

            array_push($keys, 'image');
            array_push($values, "'../images/{$randomFolder}/{$image['name']}'");
        }
        $keysStr = implode(', ', $keys);
        $valuesStr = implode(', ', $values);
        $users = new Registration();
        $query = $this->insertQuery($this->table, $keysStr, $valuesStr);
        $this->executeQuery($query);
        header('Location: \registrationSuccess');
    }
}
