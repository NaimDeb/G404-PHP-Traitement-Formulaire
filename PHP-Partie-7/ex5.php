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

    <form action="" method="post">
        <label for="civilite">
            <select name="civilite" id="civilite">
                <option value="">CHOISIS LA</option>
                <option value="Mr">Mr</option>
                <option value="Madame">Madame</option>
                <option value="Ms">Ms</option>
                <option value="jsp">jsp</option>
            </select>
        </label>
        <label for="firstName">
            <input type="text" placeholder="firstName" name="firstName">
        </label>
        <label for="lastName">
            <input type="text" placeholder="lastName" name="lastName">
        </label>
        <input type="submit" value="Envoyer">
    </form>

    <?php


        if (isset($_POST["civilite"])){
            echo "<p> Vous êtes : " . $_POST["civilite"] . " ";
        };
        if (isset($_POST["firstName"])){
            echo $_POST["firstName"] . " ";
        };
        if (isset($_POST["lastName"])){
            echo " ". $_POST["lastName"] . "</p>";
        };

    
    ?>
    
</body>
</html>