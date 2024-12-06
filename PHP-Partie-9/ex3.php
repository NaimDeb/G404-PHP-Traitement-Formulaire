<?php


$jours = array(
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche",
);

$mois = array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
" juillet "," août "," septembre "," octobre "," novembre "," décembre ");


?>

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

                date_default_timezone_set("Europe/Paris");
                echo "Nous sommes le : ". $jours[date("l")] . " " . date("j") ." ". $mois[date("m")]." ". date("Y");


            ?>
        </div>
    </div>
</body>
</html>