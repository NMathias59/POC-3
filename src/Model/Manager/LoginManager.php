<?php

namespace App\Model\Manager;

use Core\DataBase\Manager;
use App\Model\Entity\Admin;

class LoginManager extends Manager
{
    private function hydrate($data)
    {
        if (is_array($data)) {
            $tab = [];

            foreach ($data as $obj) {
                $tab[] = new Admin($obj);
            }

            return $tab;
        }

        return new Admin($data);
    }

    public function loginUser($login, $password)
    {
        $requete = self::$dataBase->prepare('SELECT * FROM `admin` WHERE `login` = :login AND `password` = :password ');
        $requete->execute(array('login' => $login, 'password' => password_hash($password, PASSWORD_DEFAULT)));

        return $requete->fetch();
    }
}
