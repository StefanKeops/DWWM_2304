<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>include_once</title>
  </head>
  <body>
    <div>
    
    <?php
    include_once('commun.inc');
    $x = 1;
    echo "Valeur de \$x dans le script principal : $x<br />";
    echo "Valeur de \$y dans le script principal : $y<br />";
    include_once('commun.inc');
    ?>
    
    </div>
  </body>
</html>
