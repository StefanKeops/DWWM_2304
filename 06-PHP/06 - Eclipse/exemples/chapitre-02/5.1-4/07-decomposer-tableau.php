<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Décomposer un tableau</title>
    <style>
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
  <div>

  <h1>Fusionner des tableaux</h1>
  <?php
  $x = ['x','y','z'];
  $y = ['a','b','c',...$x]; // = ['a','b','c','x','y','z']
  print_r($y);
  echo '<br />';
  $y = ['a',...$x,'b'];     // = ['a','x','y','z','b']
  print_r($y);
  ?>

  <h1>Décomposer un tableaux qui a des clés alphabétiques</h1>
  <?php 
  $x = ['A'=>65,'B'=>66,'Z'=>0];
  $y = ['C'=>67,'D'=>68,'Z'=>90];
  $z = [...$x,...$y];       // = ['A'=>65,'B'=>66,'Z'=>90,'C'=>67,'D'=>68]
  print_r($z);
  ?>

  <h1>Utilisation dans un appel de fonction</h1>
  <?php
  $bornes = [1,10];
  echo rand(...$bornes),'<br />';
  echo rand($bornes[0],$bornes[1]); // syntaxe équivalente
  ?>

  <h1>Utilisation dans un appel de fonction d'un tableau avec des clés alphabétiques</h1>
  <?php 
  $bornes = ['max'=>100,'min'=>1];
  echo rand(...$bornes);
  ?>

  <h1>Utilisation dans un appel de fonction pour une partie des paramètres</h1>
  <?php
  $x = 1234.567; 
  $séparateur = [',',' '];
  echo number_format($x,2,...$séparateur);
  ?>

  </div>
  </body>
</html>