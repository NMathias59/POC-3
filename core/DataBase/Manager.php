<?php

namespace Core\DataBase;

use PDO;

abstract class Manager
{
    protected static $dataBase = null;

    public function __construct()
    {
        self::dbConnect();
    }

    private static function dbConnect()
    {
        if (self::$dataBase === null) {
            self::$dataBase = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
        }
    }
}
