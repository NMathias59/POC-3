<?php

namespace App\Controller;

use App\model\PostManager;

class HomeController
{
    public function homePageAction()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPost1();
        require 'src/view/home.php';
    }
}
