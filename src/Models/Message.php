<?php

    //namespace App\Models;
    //use App\Repository\essagesRepository;

    require_once '../Repository/MessagesRepository.php';

    class Message
    {
        private $id = 0;
        private $topic = '';
       
        private $resolved;
        private $teacherId = 0;
        private $userId = 0;
        private $allMessages = [];
        

        
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

        
        function setUserId($userId)
        {
            $this->userId = $userId;
        }

        function getUserId()
        {
            return $this->userId;
        }

        function setTeacherId($teacherId)
        {
            $this->teacherId = $teacherId;
        }

        function getTeacherId()
        {
            return $this->teacherId;
        }


      
        function getAllMessages(){
    
            $MessagesRepo = new MessagesRepository(); 
            
            $MessagesArray = $MessagesRepo->selectAll();
           
           foreach($MessagesArray as $message)
            {

                $data = 
                [   
                    'id' => $message['id'],
                    'topic' => $message['topic'],
                    'teacherId' => $message['teacherId'],
                    'userId' =>  $message['userId'],
                    'resolved' => false
                ];
                array_push($this->allMessages, new Message($data)
            );  
            }

    
            //return $MessagesArray;
            return $this->allMessages;
           
        }


        function getAllSolvedMessages ()
        {

        }
       
        function __construct($data = [])
        {
            $this->id = $data['id'];
            $this->topic = $data['topic'];
            $this->userId = $data['userId'];
            $this->teacherId = $data['teacherId'];
            $this->resolved = $data['resolved'];
            
        }


    };

