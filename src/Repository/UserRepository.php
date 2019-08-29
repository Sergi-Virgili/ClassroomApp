<?php


// namespace App\Repository;



class UserRepository
{

    private $conexion;
    private $server = "localhost";
    private $user = "root";
    private $password = "root";
    private $table = 'users';
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
        $respuestas = mysqli_query($conn, $query);

        $arrayUsers = array();
        while ($row = mysqli_fetch_array( $respuestas ))
        {
            $arrayUsers[] = array 
            (
            "id" => $row['id'],
            "name" => $row['name'],
            "role"=> $row['role'],
            "email"=> $row['email'],
            "password"=> $row['password']
        );
        }
        return $arrayUsers;
    }

    


    function SelectByEmail($email)
    {
        $this->connectDB();
        $conn = $this->conexion;
        $query = "SELECT * FROM users WHERE email = '$email'";
        $userConnection = mysqli_query($conn, $query);

        $userDataArray = array();
        while ($userData = mysqli_fetch_array( $userConnection ))
        {
            $userDataArray[] = array 
            (
            "id" => $userData['id'],
            "name" => $userData['name'],
            "email"=> $userData['email'],
            "role"=> $userData['role']
        );
        }
        return $userDataArray;


    }

    

}

