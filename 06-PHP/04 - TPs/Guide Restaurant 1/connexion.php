<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$connexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

afficherTableauRestaurants($connexion);

mysqli_close($connexion);

?>