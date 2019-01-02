<?php

namespace App\Controller;

use App\Model\PostManager;

class ChapitreController
{
    public function chapitrePageAction()
    {
        $postManagerChapitres = new PostManager();
        $posts = $postManagerChapitres->getPost2();
        require '../src/view/chapitres.php';
    }
}
//ChapitresController::chapitrePageAction();
