<?php
 function getUserName($prenom, $nom) {
    return $prenom . $nom;
 }

 $resultat =  getUserName("stefan", "csaszar");
 echo $resultat;
?>