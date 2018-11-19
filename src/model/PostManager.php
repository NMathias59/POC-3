<?php

namespace App\model;

class PostManager
{
    public function getPost1()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, name, createdAt, content  FROM Post ORDER BY createdAt DESC LIMIT 0, 6');

        return $req;
    }

    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

        return $db;
    }
}
