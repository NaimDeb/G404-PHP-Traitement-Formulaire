<?php
// index.php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement de formulaire</title>
</head>

<body>
    <?php 
    if(isset($_GET["lastname"])) {
        $lastName = $_GET["lastname"];
        echo "<p>Ton nom : {$lastName}</p>";
    }
    if(isset($_GET["firstname"])) {
        $firstName = $_GET["firstname"];
        echo "<p>Ton prénom : {$firstName}</p>";
    }
    if(isset($_GET["age"])) {
        $age = $_GET["age"];
        echo "<p>Ton age : {$age}</p>";
    } else {
        echo "<p> Tu n'as pas préciser ton age </p>";
    }


    ?>



    

</body>

</html>
