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
            if (isset($_COOKIE["login"])){
                echo "<p>🖥️ Nom d'utilsateur : " . htmlspecialchars($_COOKIE["login"]) . "</p>";
            }
            if (isset($_COOKIE["password"])){
                echo "<p>🌐 MDP : " . htmlspecialchars($_COOKIE["password"]) . "</p>";
            }

            var_dump( $_COOKIE);


            ?>
        </div>
    </div>
</body>
</html>