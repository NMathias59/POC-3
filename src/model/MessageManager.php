<?php

namespace App\Model;

use Core\DataBase\Manager;

class MessageManager extends Manager
{
    public function getMessage1()
    {
        $req = self::$dataBase->query('SELECT id, `name`, email, phone, content, createdAt  FROM `message`  ORDER BY createdAt DESC');

        return $req->fetchAll();
    }
}
