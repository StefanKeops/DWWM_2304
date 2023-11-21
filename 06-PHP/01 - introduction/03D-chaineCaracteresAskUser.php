<?php
function getMC2() {
    return "Albert Einstein";
 }

 $resultat1 = getMC2();
 
function getFullName($prenom, $nom) {
    $nomEnMajuscules = strtoupper($nom);
    $prenomEnMinuscules = strtolower($prenom);
    return $prenomEnMinuscules . ' ' . $nomEnMajuscules;
 }

 $resultat2 =  getFullName("stefan", "csaszar");

$resultat = 'Bonjour' . ' ' . $resultat2 . ', connaissez-vous' . ' ' . $resultat1 . '?';
echo $resultat;
?>