<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Paramètres : utilisation du nom du paramètre dans l'appel</title>
    <style> 
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt } 
    </style> 
  </head>
  <body>
    <div>

    <?php
    // Fonction qui calcule le volume d'un cylindre en fonction
    // de son rayon et de sa hauteur.
    function volume_cylindre($rayon = 1,$hauteur = 1) {
      return round(pi() * ($rayon ** 2) * $hauteur,2);
    }
    // L'ordre des paramètres a de l'importance !
    echo 'volume_cylindre(2,10) = ',volume_cylindre(2,10),'<br />';
    echo 'volume_cylindre(10,2) = ',volume_cylindre(10,2),'<br />';
    // Appel non ambigu avec un ordre quelconque des paramètres.
    echo 'volume_cylindre(hauteur: 10, rayon: 2) = ',
         volume_cylindre(hauteur: 10, rayon: 2),'<br />';
    // Appel avec le premier paramètre omis.
    echo ' volume_cylindre(hauteur: 5) = ',volume_cylindre(hauteur: 5),'<br />';  
    // Décomposition d'un tableau dont les clés sont égales aux noms
    // des paramètres (peu importe l’ordre dans le tableau).
    $dimensions = ['hauteur' => 10,'rayon' => 2]; 
    echo "volume_cylindre(...['hauteur' => 10,'rayon' => 2]) = ",
         volume_cylindre(...$dimensions),'<br/>';
    ?>

    </div>
  </body>
</html>
