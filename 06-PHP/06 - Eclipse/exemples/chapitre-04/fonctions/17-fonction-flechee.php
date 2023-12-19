<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Fonctions fléchées</title>
    <style>
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
    <div>

    <h1>Fonction fléchée définie dans une variable</h1> 
    <?php
    // définition d'une fonction anonyme stockée dans une variable
    $fonction_anonyme = fn ($x) => $x * $x;
    echo $fonction_anonyme(3),'<br />'; 
    ?>
    
    <h1>Fonction fléchée définie directement dans l'appel</h1> 
    <?php
    // Définition d'une fonction qui accepte une fonction et un nombre
    // en paramètres et qui retourne le résultat de la fonction appliquée
    // au nombre.
    function calcul(callable $fonction,int|float $valeur) :int|float {
      return $fonction($valeur);
    }
    // Utilisation de la fonction précédente avec deux fonctions
    // fléchées qui effectuent un calcul quelconque sur un paramètre.
    echo calcul(fn ($x) => $x * $x,5),'<br />'; // carré
    echo calcul(fn ($x) => $x + $x,5),'<br />'; // somme
    // Utilisation d'une variable du contexte parent.
    $facteur = 3;
    echo calcul(fn ($x) => $x * $facteur,5),'<br />'; // produit par un facteur
    ?>

    </div>
  </body>
</html>
