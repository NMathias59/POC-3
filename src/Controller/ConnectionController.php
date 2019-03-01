<?php

namespace App\Controller;

use App\Model\LoginManager;

class ConnectionController
{
    public function connectionPageAction()
    {
        if ($_POST['formLogin']) {
            $loginManager = new LoginManager();
            $user = $loginManager->loginUser($_POST['login'], $_POST['password']);
            if ($user) {
                header('Locations : ../view/administration.php');
            } else {
                require '../../public/js/erreur _log.js';
            }
        }
        require '../src/view/connection.php';
    }
}
