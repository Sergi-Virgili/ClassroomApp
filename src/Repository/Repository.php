<?php
namespace App\Repository;
class Repository {
    
    
    private $tableUsers = 'tbl_users';
    private $tableMessages = 'tbl_turnos';
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

    function selectAllMessages()
    {
        $this->connectDB();
        $conn = $this->conexion;
        $query = "SELECT * FROM $this->tableMessages";
        $response = mysqli_query($conn, $query);

        $arrayAllMessages = array();
        while ($row = mysqli_fetch_array( $response ))
        {
            $arrayMessages[] = array 
            (
            "id" => $row['trn_id'],
            "usrId" => $row['trn_usr_id'],
            "topic"=> $row['trn_texto'],
            "datestamp"=> $row['date'],
            "status"=> $row['trn_status']
            "fromadorId"=> $row['trn_formador_id']
        );
        }
        return $arrayMessages;
    }

        
    function updateById($id)
    {
        $this->connectDB();
        $conn=$this->conexion;
        $query="UPDATE $this->tableMessages SET trn_status_id=1 WHERE trn_id='$id'";
        $execute = mysqli_query($conn, $query);
        return $execute;
    }

   function insertMessage($table, $usr_id, $trn_texto, $timestamp, $trn_formador_id)
   $trn_status, $trn_formador_id
   $this->connectDB;
   $conn=$this->conexion;
   $query="INSERT INTO $this->tableMessages(trn_usr_id, trn_texto, trn_date, trn_status,trn_formador_id) VALUES('$usr_id', '$trn_texto', '$timestamp', '$trn_status', '$trn_formador_id')";

}




/* $selectAll($table);
$updateById($id);

+ insert($table,data[])

+ selectAllByRole($table, $Role)

+ selectAllByStatus






*/


?>