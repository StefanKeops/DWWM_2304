<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>L'opérateur d'affectation d'union NULL</title>
    <style>
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
    <div>
    
    <h1>Utilisation d'une valeur littérale</h1> 
    <?php 
    // Affectation d'une valeur par défaut à la variable $nom. 
    $nom ??= 'inconnu';
    echo 'Bonjour '.$nom.' ! <br />'; 
    // Même chose mais avec une variable déjà initialisée.
    $nom = 'Olivier'; 
    $nom ??= 'inconnu';
    echo 'Bonjour '.$nom.' ! <br />'; 
    ?>

    <h1>Utilisation d'une expression</h1>     
    <?php 
    // Affectation d'une valeur par défaut à la variable $x. 
    $x ??= log(exp(log(exp(log(exp(123))))));
    echo $x;
    ?>
    </div>
  </body>
</html>
