<?php


use App\Controllers\CoderController as Controller;

// require '../src/Controllers/CoderController.php';

use PHPUnit\Framework\TestCase;


class CoderControllerTest extends TestCase
{    
    public function testSiDevuelveUnIdInt()
    {
        $init = new Controller();
        $name = $init->listCoders();

        $this->assertEquals('Sergi', $name);

    }

    
};