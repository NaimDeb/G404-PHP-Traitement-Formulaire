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
                $feb2016 = new DateTime("2016-05-16");
                $march2016 = new DateTime("now");

                $diff = $feb2016 -> diff($march2016);

                echo "Nb de jours de février 2016  : ";
                // echo $diff->days;

                echo $diff->days






            ?>
        </div>
    </div>
</body>
</html>