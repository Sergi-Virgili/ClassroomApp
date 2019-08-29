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
                array_push($this->allMessages, 
                new Message($message['id'], $message['topic'],  $message['userId'], $message['teacherId'])
            );  
            }
    
            return $this->allMessages;
            
           
        }


        function getAllSolvedMessages ()
        {

        }
        function estoNovalePaNa()
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


$allMessages = new Message();
//$arrayMessages = $allMessages->getAllMessages();
// print_r ($arrayMessages)
// ;
// $allMessages->setTeacherId(2);
// $id = $allMessages->getTeacherId();


$data = 
[   
    'id' => 5,
    'topic' => 'Esto es el texto el mensaje',
    'teacherId' => 23,
    'userId' => 4,
    'resolved' => false,
];
$Message = new Message($data);


echo  $Message->getId(). ' ';
echo  $Message->getTopic(). ' ';
echo  $Message->getTeacherId(). ' ';
echo  $Message->getUserId(). ' ';


// foreach  ($arrayMessages as $Message)
// {
// echo $Message->getId() . " topic: " . $Message->getTopic() . $Message->getTeacherId() . " coder: " . " Teacher: " . $Message->getTeacherId() ."<br>"; 
// };