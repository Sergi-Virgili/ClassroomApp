<?php
namespace App\Models;
use App\Repository\CoderRepository;
// require_once '..\Repository\CoderRepository.php';
require_once '../Repository/CoderRepository.php';

class Coder
{
    private $id;
    private $name = "";
    private $dead = 0;
    private $allCoders = [];
    private $allCodersAlive = [];

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

    function getStatus()
    {
        return $this->dead;
    }

    function getAllCoders() 
    {
        $repo = new CoderRepository();
        $arrayCoders= $repo->selectAll();

        foreach($arrayCoders as $coder)
        {
            array_push($this->allCoders, 
            new Coder($coder['id'], $coder['coderName'], $coder['state']));
        }

        return $this->allCoders;
    }

    function getCodersAlive() 
    {
        $this->getAllCoders();
        $allCoders = $this->allCoders;

        foreach($allCoders as $coder)
        {
            if($coder->getStatus()==0)
            {
                array_push($this->allCodersAlive, $coder);
               
            }
        }

        return $this->allCodersAlive;
    }

    function random () {

        $codersAlive = $this->allCodersAlive;
        $howManyCoders="1";
        $randomCoder=array_rand($codersAlive,$howManyCoders);

        $selectedCoder=$codersAlive[$randomCoder];
        
        $update = new CoderRepository();
        $update->updateById($selectedCoder->getId());    

        return $selectedCoder;

    }

    function reset() {
        $resetAll = new CoderRepository();
        $resetAll->updateAll();
    }

    function __construct ($id = null, $name = "", $dead = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dead = $dead;
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



