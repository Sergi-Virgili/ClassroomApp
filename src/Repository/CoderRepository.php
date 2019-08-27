<?php

namespace App\Repository;

class CoderRepository
{
    private $table = 'coder';
    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "root";
    private $db = "db_wheel";

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
        $query = "SELECT * FROM coder";
        $respuestas = mysqli_query($conn, $query);

        $arrayCoders = array();
        while ($row = mysqli_fetch_array( $respuestas ))
        {
            $arrayCoders[] = array 
            (
            "id" => $row['id_coder'],
            "coderName" => $row['name_coder'],
            "state"=> $row['dead']
        );
        }
        return $arrayCoders;
    }

    function selectById($id)
    {

    }

    function selectByDead()
    {
        $query = 'SELECT * 
        FROM $this->db 
        WHERE dead = 1';
    }

    function updateById($id)
    {
        $this->connectDB();
        $conn=$this->conexion;
        $query="UPDATE $this->table SET dead=1 WHERE id_coder='$id'";
        $execute = mysqli_query($conn, $query);
        return $execute;
    }

    function updateAll()
    {
        $this->connectDB();
        $conn=$this->conexion;
        $query="UPDATE $this->table SET dead=0";
        $execute = mysqli_query($conn, $query);
        return $execute;
    }

}

//UPDATE table_name
//SET column1=value, column2=value2,...
//WHERE some_column=some_value


//$obj = new CoderRepository();
//$obj->connectDB();
//$obj->selectAll();
//$obj->updateById(4);
//$obj->updateAll();