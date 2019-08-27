<?php
namespace App\Views;
use App\Controllers\CoderController; 
require "../Controllers/CoderController.php";

$init = new CoderController();
$coders = $init->listCoders();
$i=1;
$stateStyle = '';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Wheel of Doom v 1.2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles2.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        
        <!-- <link href="https://fonts.googleapis.com/css?family=Bahiana|Butcherman|Frijole&display=swap" rel="stylesheet">  -->
    </head>

    <body>
        <div class="container">
            <header>
                <h1 class="titulo">WHEEL OF DOOM</h1>
            </header>
            <main>


                <ul id="wheel">

                    <?php

                        foreach ($coders as $coder)
                        {   
                            if ($coder->getStatus() == '0') {$stateStyle = 'alive';};
                            if ($coder->getStatus() == '1') {$stateStyle = 'dead';};

                            $tag = '<li id=' .$i. ' class ='. $stateStyle .'>';
                            echo $tag . $coder->getName() . '</li>';
                            
                            $i++;
                        };
                    ?>

                </ul>
            </main>
            <div id="buttons">
                <!-- <form action="" method="post">
                <button href="#" class="PlayButton" id="go" onclick="play()">START</button>
                <button href="#" class="KillButton KillButtonInactive" id="kill" onclick="kill()">KILL</button>
                <button href="#"  class="ResetButton" id="reset" onclick="reset()" >RESET</button>
                </form> -->
                <form action="../Controllers/CoderController.php" method="post">
                <input type="submit" name="kill" value="GO" />
                
                <input type="submit" name="reset" value="RESET" />
                </form>
            </div>
        </div>   
    <script src="scripts.js"></script> 
    </body>


</html>

<!-- //$init = new CoderController();
// $name = $init->listCoders();

// echo $init; -->
