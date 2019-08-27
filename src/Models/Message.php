<?php

    namespace App\Models;
    use App\Repository\Repo;

    class Message
    {

        private $id;
        private $topic;
        private $timestamp;
        private $status;


        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;

        }

        function set($topic)
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


    }


