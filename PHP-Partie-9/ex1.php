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

                echo "La date d'aujourd'hui est : ". date("d") . "/" . date("m") ."/". date("y");

                echo "<br> test <br>";

                $date = new DateTimeImmutable();
                echo $date->format( "d-m-Y");


            ?>
        </div>
    </div>
</body>
</html>