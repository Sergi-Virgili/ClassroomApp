<?php

    namespace App\Models;
    use App\Repository\MessagesRepository;

    require_once '../Repository/MessagesRepository.php';

    class Message
    {
        private $id;
        private $topic;
        private $timestamp;
        private $resolved;
        private $teacherId;
        private $coderId;
        private $allMessages = [];
        private $allResolvedMessages = [];

        function __construct($id = null, $topic = '', $resolved = false )
        {
            $this->id = $id;
            $this->topic = $topic;
            $this->resolved = $resolved;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;

        }

        function setTopic($topic)
        {
            $this->topic = $topic;
        }

        function getTopic()
        {
            return $this->topic;
        }

        function getStatus()
        {
            return $this->dead;
        }

        function getAllMessages(){
    
            $MessagesRepo = new MessagesRepository(); 
            
            $MessagesArray = $MessagesRepo->selectAllMessages();
           
            foreach($MessagesArray as $message)
            {
                array_push($this->allMessages, 
                new Message($message['id'], $message['userId'], $message['topic'], $message['datestamp'], $message['resolved'], $message['teacherId']));
            }
    
            return $this->allMessages;
            
           
        }


        function getAllSolvedMessages (){

        }
        function estoNovalePaNa(){

            
        }


    }


$obj = new Message();
$response = $obj->getAllMessages();

print_r ($response);