<?php

namespace App\Controller;

use App\Model\Manager\PostManager;

class ChapitreController
{
    public function chapitrePageAction()
    {
        $ChapterByPage = new PostManager();
        $posts = $ChapterByPage->getPostsByPage($_POST['page'] ?? 1);
        require '../src/view/chapter.php';
    }
}
