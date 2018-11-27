<?php

namespace App\model;

use Core\DataBase\Manager;

class PostManager extends Manager
{
    public function getPost1()
    {
        $req = self::$db->query('SELECT id, name, createdAt, content  FROM Post ORDER BY createdAt DESC LIMIT 0, 6');

        return $req;
    }
}
