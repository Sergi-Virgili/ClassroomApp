<?php
namespace App\Controllers;

use App\Models\Message;
require '../Models/Message.php';

// require_once '..\Models\Coder.php';

class MessageController {
   

    public function listMessages() {

        $listmessages = new Message();
        $allMessages = $listmessages->getAllMessages();
        //$codersArray = [];
        //$i=0;
        return $allMessages;
       

    }


}

/* 
$init = new MessageController();
$allMessages = $init->listMessages();


foreach ($allMessages as $message)
{   
  
    echo $message->getTopic();
    echo '<br>';
    
}; */