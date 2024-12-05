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
    if(isset($_GET["week"])) {
        $week = $_GET["week"];
        echo "<p>semaine : {$week}</p>";
    }


    ?>



    

</body>

</html>
