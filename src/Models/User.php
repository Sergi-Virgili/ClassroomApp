<?php
// namespace App\Models;
// use App\Repository\UserRepository;
// require_once '..\Repository\CoderRepository.php';
require_once '../Repository/UserRepository.php';

class User
{
    private $id = null;
    private $name = "";
    private $password = "";
    private $role = null;
    private $email = '';
    private  $isLoged = false;
    private $allUsers = [];

    function __construct($data = [])
    {
        
        $this->name = $data['name'];
        $this->id = $data['id'];
        $this->password = $data['password'];
        $this->role = $data['role'];
        $this->email = $data['email'];
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
        $repo = new UserRepository();
        $array= $repo->selectAll();

        foreach($array as $user)
        {
            $data = [
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
                'email' => $user['email'],
                'password'=> $user['password']
            ];
            array_push($this->allUsers, new User($data));
        };

        return $this->allUsers;
    }

   

 

    
}

// $data = 
// [   
//     'role' => 1,
//     'name' => 'sergi',
//     'password' => 1234567,
    
//     'isLoged' => true
// ];
$userlist = new User();
$allUsers = $userlist->getAllUsers();
// print_r ($allUsers);

 //echo $user->getName();  
foreach ($allUsers as $user) { 
echo $user->getId() . ' ';  
echo $user->getName(). ' ';  
echo $user->getPassword(). ' ';  
echo $user->getRole(). '<br> ' ;  
 
};







