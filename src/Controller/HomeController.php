<?php

namespace App\Controller;

use App\Model\PostManager;

class HomeController
{
    public static function homePageAction()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPost1();
        require '../src/view/home.php';
    }
}
//HomeController::homePageAction();
