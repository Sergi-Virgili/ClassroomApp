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
        $response = $message->getId();

        //Ejecutar escenario del test
        $expected=2;
        //Hacemos assertion del test
        $this->assertEquals($expected, $response);
    

    }


}