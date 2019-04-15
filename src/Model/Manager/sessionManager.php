<?php

namespace App\Controller;

use App\Model\Manager\LoginManager;

class SessionUser {

    public function starSession()
    {
        //Démarage de la session
        session_start();

        if (isset($_POST) &&  (!empty($_POST['login'])) && (!empty($_POST['password'])) )
       { 
            extract($_POST);

            //verification du mot de passe
            $sql = "SELECT 'login',  FROM admin WHERE login = '".addslashes($login)."'";
            $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);

         // On vérifie que l'utilisateur existe bien
            if (mysql_num_rows($req) > 0) {
            $data = mysql_fetch_assoc($req);
                
            // On vérifie que son mot de passe est correct
            if ($password == $data['mdp'])
             {    
                $loginOK = true;
            }
        }
    }  
    // Si le login a été validé on met les données en sessions
        if ($loginOK) 
        {
            $_SESSION['pseudo'] = $data['pseudo'];
        }
  
        else {
        echo 'Une erreur est survenue, veuillez réessayer !'; 
    }
}
    public function destroySession(){
        session_start();

        $_SESSION = array();

        session_destroy();
    }

    public function verifyConnection(){
        //$_SESSION
    }
}