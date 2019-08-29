<?php

    namespace App\Models;
    use App\Repository\MessagesRepository;

    require_once '../Repository/MessagesRepository.php';

    class Message
    {
        private $id = 0;
        private $topic = '';
        private $timestamp = 0;
        private $resolved = 0;
        private $teacherId = 0;
        private $userId = 0;
        private $allMessages = [];
        private $allResolvedMessages = [];

        function __construct($id = 0, $topic = '', $userId = 0, $teacherId = 0 )
        {
            $this->id = $id;
            $this->topic = $topic;
            
           
            $this->$userId = $userId;
            $this->getTeacherId($teacherId);
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
                array_push($this->allMessages, 
                new Message ($message['id'],  $message['userId'], $message['topic'], $message['datestamp'], $message['teacherId'])
            ); 
            } 
    
            //return $MessagesArray;
            return $this->allMessages;
           
        }


        function getAllSolvedMessages ()
        {

        }
        function estoNovalePaNa()
        {

            
        }


    };


$obj = new Message();
$arrayMessages = $obj->getAllMessages();
print_r ($arrayMessages);



/* 
$allMessages->setTeacherId(2);
$id = $allMessages->getTeacherId();



$Message = new Message(5,'hola', 1, 2) ;


echo  " coder: " .  $Message->getUserId() . " Teacher: " . $Message->getTeacherId() ."<br>"; 

foreach  ($arrayMessages as $Message)
{
echo $Message->getId() . " topic: " . $Message->getTopic() . $Message->getTeacherId() . " coder: " . " Teacher: " . $Message->getTeacherId() ."<br>"; 
}; */