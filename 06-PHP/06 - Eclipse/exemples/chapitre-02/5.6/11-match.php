<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>match</title>
    <style>
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
    <div>
    
    <h1>Exemple simple</h1>
    <?php
    $fruit = 'pomme';
    $genre = 'F';
    echo 
      match ($genre) {
        'M' => 'le',
        'F' => 'la', // une virgule est autorisée à la fin
      } . ' ' . $fruit;
    ?>

    <h1>Exemple avec des expressions</h1>
    <?php
    $x = 2;
    $résultat = 
      match (rand(0,10)) {
        rand(0,1)   => 'zéro ou un (première chance)',
        0,1         => 'zéro ou un (deuxième chance)',
        2,3,5,7     => 'nombre premier',
        $x**2,$x**3 => 'puissance de ' . $x,
        default     => 'autre nombre'
      };
    echo $résultat;
    ?>

    <h1>Exemple avec des inégalités</h1>
    <?php
    $x = rand(0,1000);
    $résultat = 
      match (true) {
        $x == 0   => 'zéro',
        $x <= 100 => 'petit',
        $x >  500 => 'grand',
        default   => 'moyen' // aucun des cas précédents
      };
    echo $x,' : ',$résultat;
    ?>
    
    </div>
  </body>
</html>

