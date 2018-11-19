<?php

namespace App\model;

class PostManager
{
    public function getPost()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, name, createdAt, content  FROM Post ORDER BY createdAt DESC LIMIT 0, 1');

        return $req;
    }

    public function getPost2()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, name, createdAt, content  FROM Post ORDER BY createdAt DESC LIMIT 2, 6');

        return $req;
    }

    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

        return $db;
    }
}
