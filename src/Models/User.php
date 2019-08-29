<?php
namespace App\Models;
// use App\Repository\UserRepository;
require_once '..\Repository\UserRepository.php';
// require_once '../Repository/CoderRepository.php';

class User
{
    private $id;
    private $name = "hola";
    private $password = "password";
    private $role;
    public $isLoged = false;
    private $allUsers = [];

    function __construct($data = [])
    {
        
        $this->name = $data['name'];
        $this->id = $data['id'];
        $this->password = $data['password'];
        $this->role = $data['role'];
        $this->isLoged = $data['isLoged'];
        

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
        return $this->password;
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
        
        $UsersRepo = new UserRepository(); 
        $arrayUserData = $UsersRepo->ValidateEmailAndPassword();

        foreach ($arrayUserData as )



/* 
        
  
  
          
        if($conteo == 1 and $login_rol == 2) {        
           $_SESSION['login_user'] = $username;
           header("location: lista_formador.php");
        }
  
        if($conteo == 1 and $login_rol == 1) {        
           $_SESSION['login_user'] = $username;
           header("location: lista.php");
        } */


    }

 

    
}

$data = 
[   
    'role' => 1,
    'name' => 'sergi',
    'password' => 1234567,
    
    'isLoged' => true
];
$user = new User($data);
//echo $user->getName();  
  
echo $user->getId() . ' ';  
echo $user->getName(). ' ';  
echo $user->getPassword(). ' ';  
echo $user->getRole(). ' ';  
echo $user->isLoged;  
// //$coder->getCodersAlive();
// $array = $coder->getCodersAlive();
// $coder->random();


// echo 'allcoders: <br>';

// foreach ($array as $coder){
//     echo $coder->getName();
//     echo $coder->getStatus();
// }



