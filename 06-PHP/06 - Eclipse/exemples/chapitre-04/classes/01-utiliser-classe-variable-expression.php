<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Instanciation à l'aide d'une variable ou d'une expression</title>
  </head>
  <body>
    <div>

    <?php
    // Inclusion du fichier qui contient la définition de la 
    // classe Utilisateur présentée précédemment.
    include('01-classes.inc.php');
    // Variable qui contient le nom de la classe
    $classe = 'Utilisateur';
    // Fonction qui retourne le nom de la classe
    function lire_classe() {return 'Utilisateur';}
    // Instanciation à l'aide de la variable
    $moi = new $classe('Olivier','Heurtel');
    // La même chose avec la variable en tant qu'expression (syntaxe version 8)
    $encore_moi = new ($classe)('Olivier','Heurtel');
    // Instanciation à l'aide d'une expression (ici une fonction)
    $toujours_moi = new (lire_classe())('Olivier','Heurtel');
    ?>

    </div>
  </body>
</html>
