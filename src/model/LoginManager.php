<?php

namespace App\Model;

use Core\DataBase\Manager;

class LoginManager extends Manager
{
    public function loginUser($login, $password)
    {
        $requete = self::$dataBase->prepare('SELECT * FROM utilisateur WHERE `login` = :login AND `password` = :password ');
        $requete->execute(array('login' => $login, 'password' => password_hash($password, PASSWORD_DEFAULT)));

        return $requete->fetch();
    }
}
