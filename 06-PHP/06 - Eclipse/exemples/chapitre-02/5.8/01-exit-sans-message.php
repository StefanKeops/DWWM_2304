<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exit (sans message)</title>
  </head>
  <body>
    <div>
    
    <?php
    // Générer le début de la page.
    echo 'Bonjour ';
    // Une condition n'est pas vérifiée, interrompre le script.
    if ($nom??'' == '') {
      exit(1);  // pas de message ...
    }
    // Poursuivre la génération de la page.
    echo $nom;
    ?>
    
    </div>
  </body>
</html>

