<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Opérateur nullsafe</title>
  </head>
  <body>
    <div>

    <?php
    // Inclusion du fichier qui contient la définition de la 
    // classe utilisateur présentée précédemment.
    include('01-classes.inc.php');
    // Appel d'une méthode sans avoir instancié l'objet.
    // L'opérateur ?-> permet d'éviter d'avoir une exception.
    $moi = null;
    echo "Moi (1) : {$moi?->informations()} <br/>";
    // Appel de la méthode après avoir instancié l'objet.
    $moi = new utilisateur('Olivier','Heurtel');
    echo "Moi (2) : {$moi?->informations()} <br/>";
    ?>

    </div>
  </body>
</html>
