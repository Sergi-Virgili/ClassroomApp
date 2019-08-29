<?php
//namespace App\Repository;
class MessagesRepository 
{    
    private $table = 'messages';
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "root";
    private $db = "classroom-app";

    function connectDB()
    {
        $this->conexion = mysqli_connect($this->server, $this->user, $this->password) or die ("No se ha podido conectar al servidor");

        $dbSelected = mysqli_select_db($this->conexion, $this->db) or die ("No se ha podido leer la base de datos");

        if(!$this->conexion)
        {
            $response = "No se ha podido conectar";
            return $response;
        }

        $response = "Conexion Exitosa";
        
        return $response;
    }

    function selectAll()
    {
        $this->connectDB();
        $conn = $this->conexion;
        $query = "SELECT * FROM $this->table";
        $response = mysqli_query($conn, $query);

        $arrayAll = array();
        while ($row = mysqli_fetch_array( $response ))
        {
            $arrayAll[] = array 
            (
            "id" => $row['id'],
            "userId" => $row['user_id'],
            "topic"=> $row['topic'],
            //"datestamp"=> $row['date'],
           // "resolved"=> $row['resolved'],
            "teacherId"=> $row['teacher_id']
        );
        }
        return $arrayAll;
    }

        
    function updateById($id)
    {
        $this->connectDB();
        $conn=$this->conexion;
        $query="UPDATE $this->table SET trn_status_id=1 WHERE trn_id='$id'";
        $execute = mysqli_query($conn, $query);
        return $execute;
    }

   function insertMessage($userId, $teacherId, $topic, $resolved){
   
    $this->connectDB;
    $conn=$this->conexion;
    $query="INSERT INTO $this->table( user_id, topic, teacher_id, resolved) VALUES('$userId', '$topic', '$teacherId', '$resolved')";
   }

}


// $obj = new MessagesRepository();
// $response = $obj->selectAll();


// foreach  ($response as $Message)
// {
// echo $Message['topic'] . ' user ' . $Message['userId'] .' teacher ' . $Message['teacherId'] . "<br>"; 
// }









?>