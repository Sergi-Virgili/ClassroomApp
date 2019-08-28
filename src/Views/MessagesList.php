<html>
    <head>
        <title>ClassRoom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
    </head>

    <body>
       
            <main>


                
                    <?php

                       
                        $listmessages = new MessageController();
                        $allMessages = $listmessages->listMessages();


                        foreach ($allMessages as $message)
                        {   
                        
                            echo $message->getStatus();
                            echo '<br>';
                            
                        };
                    ?>

              
            </main>
           
       
    
    </body>


</html>