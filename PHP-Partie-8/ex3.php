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
        <form action="" method="post">
            <div class="form-group">
                <label for="login">Username : </label>
                <input type="text" id="login" placeholder="Exemple : Mozilla/5.0" name="login">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="text" id="password" placeholder="Exemple : 192.168.0.1" name="password">
            </div>
            <button type="submit" class="submit-btn">Envoyer</button>
        </form>

        <div class="output">
            <?php
            if (isset($_POST["login"])){
                setcookie("login", $_POST["login"]);
            }
            if (isset($_POST["password"])){
                setcookie("password", $_POST["password"]);
            }

            
            if (isset($_COOKIE["login"])){
                echo "<p>🖥️ Nom d'utilsateur : " . htmlspecialchars($_COOKIE["login"]) . "</p>";
            }
            if (isset($_COOKIE["password"])){
                echo "<p>🌐 MDP : " . htmlspecialchars($_COOKIE["password"]) . "</p>";
            }



            ?>
        </div>
    </div>
</body>
</html>