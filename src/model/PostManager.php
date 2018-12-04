<?php

namespace App\Model;

use Core\DataBase\Manager;

class PostManager extends Manager
{
    public function getPost1()
    {
        $req = self::$dataBase->query('SELECT id, name, createdAt, content  FROM Post ORDER BY createdAt DESC LIMIT 0, 6');

        return $req->fetchAll();
    }
}
