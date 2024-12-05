<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:bisque;">

<?php 

    if (isset($_POST["civilite"])){
        echo "<p> Vous êtes : " . $_POST["civilite"];
    };
    if (isset($_POST["firstName"])){
        echo $_POST["firstName"];
    };
    if (isset($_POST["lastName"])){
        echo " ". $_POST["lastName"] . "</p>";
    };


?>
    
</body>
</html>