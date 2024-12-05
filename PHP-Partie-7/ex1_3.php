<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./user.php" method="get">
        <label for="firstName">
            <input type="text" placeholder="firstName" name="firstName">
        </label>
        <label for="lastName">
            <input type="text" placeholder="lastName" name="lastName">
        </label>
        <input type="submit" value="Envoyer">
    </form>

    <?php

        if (isset($_GET["firstName"])){
            echo "<p> Ton prénom : " . $_GET["firstName"] . "</p>";
        };
        if (isset($_GET["lastName"])){
            echo "Ton nom : " . $_GET["lastName"] . "</p>";
        };
    
    ?>
    
</body>
</html>