<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>error_reporting()</title>
  </head>
  <body>
    <div>

    <?php
    // Valeur courante de error_reporting.
    echo '<b>error_reporting = ',error_reporting(),'</b><br />';
    // Par défaut égal à tout (E_ALL) depuis la version 8. 
    echo '= E_ALL = ',E_ALL,'<br />'; 
    // Affichage d'une variable non initialisée.
    echo "\$x (non initialisée) = $x => message d'erreur <br />";
    // Passage de error_reporting à E_ALL-E_WARNING (tout sauf E_WARNING)
    error_reporting(E_ALL-E_WARNING);
    echo '<b>error_reporting = E_ALL-E_WARNING</b><br />';
    // Affichage d’une variable non initialisée.
    echo "\$x (non initialisée) = $x => plus de message <br />";
    // Passage de error_reporting à 0 (rien).
    error_reporting(0);
    echo '<b>error_reporting = 0</b><br />';
    // Ouverture d’un fichier qui n'existe pas.
    if (! $fichier = fopen('/tmp/infos.txt','r')) {
       echo 'Erreur dans fopen => pas message<br />';
    };
    // Lecture du fichier à l'aide du descripteur de fichier.
    echo '<i>Tentative de lecture du fichier avec fread</i><br />';
    $texte = @fread($fichier,100); 
    // L'appel précédent échoue avec une erreur fatale qui stoppe l'exécution
    // du script. L'instruction suivante n'est pas exécutée.
    echo '<b>Fin du script</b><br />';
    ?>

    </div>
  </body>
</html>
