<?php

namespace App\Controller;

use App\Model\Manager\LoginManager;

class ConnectionController
{
    public function connectionPageAction()
    {var_dump($_SERVER['REQUEST_METHOD']);
        if ($_SERVER['REQUEST_METHOD'] ==='POST') {
            $loginManager = new LoginManager();
            $user = $loginManager->loginUser($_POST['login'], $_POST['password']);
            var_dump($user);
            if ($user) {
                header('Location: administration');
            } else {
                echo('erreur');
                die();
            }
        }
        require '../src/view/connection.php';
    }
}

