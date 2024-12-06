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
 
                $feb2016 = new DateTime("2016-02-01");
                $march2016 = new DateTime("2016-03-01");

                $diff = $feb2016 -> diff($march2016);

                echo "Date d'ajd + 20 jours  : ";
                echo $diff->days;







            ?>
        </div>
    </div>
</body>
</html>