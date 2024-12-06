<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stylisé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Informations du Client</h1>

        <div class="output">
            <?php

                $date = new DateTimeImmutable();    

                echo "Fuseau horaire : ";

                echo $date->format( "h:i:s");

                echo "<br> <br>";

                $autreDate = mktime(15, 00, 00, 8, 2, 2016);

                echo "La date de 2016 est : ". date("d", $autreDate) . "/" . date("m" , $autreDate) ."/". date("y" , $autreDate) ." ". date("h:i:s" , $autreDate);




            ?>
        </div>
    </div>
</body>
</html>