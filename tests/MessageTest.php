<?php

use App\Models\Message;
// require '../src/Models/Coder.php';
use PHPUnit\Framework\TestCase;


class MessageTest extends TestCase
{    
    public function testSiGetIdDevuelveNumeroCreado()
    {
        //Definir escenario del test
        
        $message = new Message();
        $message->setId(2);
        //Ejecutar escenario del test
        $response = $message->getId();
        $expected=2;
        //Hacemos assertion del test
        $this->assertEquals($expected, $response);
    

    }

    public function testSiloQueReciboDeTopicEsUnString()
    {
     
        $obj = new Message();
        $obj->setTopic("tengouna duda");

        $resultado = $obj->getTopic();
        

        $this->assertIsString($resultado);

        
    }

    function testCreateByData(){
        $msg = new Message (1);
        $response = $msg->getId();

        $this->assertEquals('1', $response);
    }

}


