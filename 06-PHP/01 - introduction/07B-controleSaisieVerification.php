<?php

function stringLength($chaine) {
    $longueur = strlen($chaine);
    return $longueur >= 9;
}

function passwordCheck($motDePasse) {
    // verifica lungimea parolei
    $lengthCheck = stringLength($motDePasse);

    // verifica daca contine cifre
    $numericCheck = preg_match('/\d/', $motDePasse);

    // verifica daca exista majuscule si litere normale
    $caseCheck = preg_match('/[a-z]/', $motDePasse) && preg_match('/[A-Z]/', $motDePasse);

    // verifica daca exista caractere speciale
    $specialCharCheck = preg_match('/[^a-zA-Z\d]/', $motDePasse);

    // true daca toate conditiile sunt indeplinite, false daca nu
    return $motDePasse && $numericCheck && $caseCheck && $specialCharCheck;
}

$resultat1 = passwordCheck("MotDePasse1!");
$resultat2 = passwordCheck("motdepasse");
$resultat3 = passwordCheck("123456789");

var_dump($resultat1); echo'<br>';
var_dump($resultat2); echo'<br>';
var_dump($resultat3); 
?>
