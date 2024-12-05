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
    if(isset($_GET["building"])) {
        $building = $_GET["building"];
        echo "<p>building : {$building}</p>";
    }
    if(isset($_GET["room"])) {
        $room = $_GET["room"];
        echo "<p>room : {$room}</p>";
    }


    ?>



    

</body>

</html>
