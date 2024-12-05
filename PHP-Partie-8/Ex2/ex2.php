            <?php

            session_start();
            
            
            
            $_SESSION["lastName"] = "hamidi";
            $_SESSION["firstName"] = "Naim";
            $_SESSION["age"] = "22";
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
            <a href="./user.php">Regardez</a>

        <div class="output">
        </div>
    </div>
</body>
</html>