<?php
namespace App\Controllers;

use App\Models\Coder;
require '../Models/Coder.php';

// require_once '..\Models\Coder.php';

class CoderController {
   
    function login ($email, $password){
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);
        
        if (!$user->validateUser()) {
            $this->view('login.php');
            return;
        };
        $this->session($user->getId());
        $this->view('coderView.php');


    }
    public function listCoders() {

        $codersInit = new Coder();
        $coders = $codersInit->getAllCoders();
        $codersArray = [];
        $i=0;
        return $coders;
       

    }

    public function kill(){

        $dead = new coder();
        $deadCoder = $dead->getCodersAlive();
        $deadCoder = $dead->random();
        $this->view();
        return $deadCoder->getName();
        
    }

    public function reset(){
        
        $init= new Coder();
        $init->reset();
        $this->view();

    }

    function view($view){
        header($view);
    }

}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['kill']))
    {
        $dead = new CoderController();
        $dead->kill();
      

    };
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['reset']))
    {
        $dead = new CoderController();
        $dead->reset();
      

    };
    