<?php
 function getFullName($prenom, $nom) {
    $nomEnMajuscules = strtoupper($nom);
    $prenomEnMinuscules = strtolower($prenom);
    return $prenomEnMinuscules . ' ' . $nomEnMajuscules;
 }

 $resultat =  getFullName("stefan", "csaszar");
 echo $resultat;
?>