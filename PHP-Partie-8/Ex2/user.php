
<?php 
session_start();
var_dump($_SESSION);

if (isset($_SESSION["firstName"])){
    echo "<p> Ton prénom : " . $_SESSION["firstName"] . "</p>";
};
if (isset($_SESSION["lastName"])){
    echo "Ton nom : " . $_SESSION["lastName"] . "</p>";
};
if (isset($_SESSION["age"])){
    echo "Ton age : " . $_SESSION["age"] . "</p>";
};

session_unset();

var_dump($_SESSION)

?>
