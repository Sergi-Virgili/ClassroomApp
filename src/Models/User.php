<?php
namespace App\Models;
use App\Repository\UserRepository;
// require_once '..\Repository\CoderRepository.php';
// require_once '../Repository/CoderRepository.php';

class User
{
    private $id;
    private $name = "";
    private $password = "";
    private $role;
    private $isLoged = false;
    private $allUsers = [];

    function __construct ($id = null, $name = "")
    {
        $this->id = $id;
        $this->name = $name;
        // TO DOOOOO
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;

    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function getPassword()
    {
        return $this->$password;
    }

    function setRole($role)
    {
        $this->role = $role;
    }

    function getRole()
    {
        return $this->$role;
    }

    function getAllUsers() 
    {
        // $repo = new CoderRepository();
        // $arrayCoders= $repo->selectAll();

        // foreach($arrayCoders as $coder)
        // {
        //     array_push($this->allCoders, 
        //     new Coder($coder['id'], $coder['coderName'], $coder['state']));
        // }

        // return $this->allCoders;
    }

    function userValidate() 
    {

    }

 

    
}

// $coder = new Coder();
// //$coder->getCodersAlive();
// $array = $coder->getCodersAlive();
// $coder->random();


// echo 'allcoders: <br>';

// foreach ($array as $coder){
//     echo $coder->getName();
//     echo $coder->getStatus();
// }



