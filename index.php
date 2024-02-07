<?php include __DIR__. '/functions.php'; ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT-FAMILY -->

        <!-- LINK CSS & BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- TITLE PAGE -->
        <title>PHP Strong Password Generatorl</title>
    </head>
    <body>

        <h1 class="text-center mb-4">
            PHP Strong Password Generator
        </h1>
        
        <form action="" method="$_GET">

            <label for="">Inserisci la lunghezza della tua password</label>
            <input type="number" name="passLenght" id="passLenght" min="4" max="22">
            <button type="sumbit">Genera la password</button>
        </form>

        <div>
            Lunghezza Password scelta: 
            <?php 
            if(isset($_GET["passLenght"]) && !empty($_GET["passLenght"])){ 
                echo $_GET["passLenght"];
                // isset restituisce FALSE se una variabile è stata impostata a NULL .
                // empty è utile per controllare se un determinato valore passante è o meno vuoto.
            }   
            ?>
        </div>

        <hr>

        <div>
           La password che ha come lunghezza 
                <strong>
                <?php 
                    if(isset($_GET["passLenght"]) && !empty($_GET["passLenght"])){
                        echo $_GET["passLenght"]. '' .' caratteri,'; 
                }
                ?>
                </strong> 
                    è stata generata casualmente, ed è:

                <strong>
                <?php 
                   if(isset($_GET["passLenght"]) && !empty($_GET["passLenght"])){
                     echo getRandomPass($_GET["passLenght"]);
                    }
                ?> 
                </strong>
         </div>
        
    
    </body>
</html>