<?php


// use App\Models\Coder;
// // require '../src/Models/Coder.php';
// use PHPUnit\Framework\TestCase;


// class CoderTest extends TestCase
// {    
//     public function testSiDevuelveUnIdInt()
//     {
//         //Definir escenario del test
//         $coderId = 2;
//         $obj = new Coder();
//         $obj->setId($coderId);
//         //Ejecutar escenario del test
//         $response = $obj->getId();
//         //Hacemos assertion del test
//         $this->assertIsInt($response);

//     }

//     public function testElNumeroDeIdCoincide()
//     {
//         //Definir escenario del test
//         $coderId = 2;
//         $obj = new Coder();
//         $obj->setId($coderId);
//         //Ejecutar escenario del test
//         $response = $obj->getId();
//         //Hacemos assertion del test
//         $this->assertEquals($coderId, $response);
//     }

//     public function testSiElNombreEsString()
//     {
//         //Definir escenario del test
//         $nuria = new Coder();
//         $respuesta = $nuria->getName();
//         $this->assertIsString($respuesta); 
//     }
    
//     function testQueElNombreSeaIgualAlQueLeDiga()
//     {
//         $coderName = 'laia';
//         $laia = new Coder();
//         $laia->setName($coderName);


//         $nombre =  $laia -> getName();
        
//         $this-> assertEquals($coderName ,$nombre);

//     }
// }
