<?php
    use PHPUnit\Framework\TestCase;
    // include_once 'src/Repository/Repository.php';
    use Repository\Repository;

    class RepositoryTest extends TestCase 
    {  
        function testeaSiSeConectaALaDB()
        {
            //Defino el escenario del test
            $connection = new Repository();
            //Ejecuto el escenario
            //$on = $connection->connectDB();
            //Compruebo la assertion
            $this->assertEquals("Conexion Exitosa", $on);

        }
    };