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
    if(isset($_GET["startDate"])) {
        $startDate = $_GET["startDate"];
        echo "<p>Première date : {$startDate}</p>";
    }
    if(isset($_GET["endDate"])) {
        $endDate = $_GET["endDate"];
        echo "<p>Dernière date : {$endDate}</p>";
    }


    ?>



    

</body>

</html>
