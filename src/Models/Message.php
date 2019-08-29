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


<<<<<<< HEAD
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
=======
$allMessages = new Message();
//$arrayMessages = $allMessages->getAllMessages();
// print_r ($arrayMessages)
// ;
// $allMessages->setTeacherId(2);
// $id = $allMessages->getTeacherId();


// $data = 
// [   
//     'id' => 5,
//     'topic' => 'Esto es el texto el mensaje',
//     'teacherId' => 23,
//     'userId' => 4,
//     'resolved' => false,
// ];
 $message = new Message();

 $arrayMessages = $message->getAllMessages();

// echo  $Message->getId(). ' ';
// echo  $Message->getTopic(). ' ';
// echo  $Message->getTeacherId(). ' ';
// echo  $Message->getUserId(). ' ';


<<<<<<< HEAD
// foreach  ($arrayMessages as $Message)
// {
// echo $Message->getId() . " topic: " . $Message->getTopic() . $Message->getTeacherId() . " coder: " . " Teacher: " . $Message->getTeacherId() ."<br>"; 
// };
>>>>>>> 15d587de0a97c4ba5d60e356efef9e168223acb4
=======
foreach  ($arrayMessages as $Message)
{
echo $Message->getId() . " topic: " . $Message->getTopic() . " teacher: " . $Message->getTeacherId()  . " Coder: " . $Message->getUserId() ."<br>"; 
};
>>>>>>> 9944dd1c9f070f5f0f9a7a1c2f8cbf351349c979
