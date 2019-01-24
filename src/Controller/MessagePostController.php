<?php

namespace App\Controller;

use App\Model\MessageManager;

class MessagePostController
{
    public static function listeMessagePageAction()
    {
        $postManagerMessage = new MessageManager();
        $messages = $postManagerMessage->getMessage1();
        require '../src/view/message.php';
    }
}
