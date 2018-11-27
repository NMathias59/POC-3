<?php

namespace Core\DataBase;

abstract class Manager
{
    private static $db = null;

    public function __construct()
    {
        self::dbConnect();
    }

    private static function dbConnect()
    {
        if (self::$db === null) {
            self::$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        }
    }
}
