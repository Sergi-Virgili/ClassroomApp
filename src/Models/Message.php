<?php

    namespace App\Models;
    use App\Repository\Repo;

    class Message
    {

        private $id;
        private $topic;
        private $timestamp;
        private $resolved;

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
         
        }


    }


