<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Tester les différentes techniques de fetch (mysqli_fetch_column)</title>
  </head>
  <body>
    <div>

    <?php 
    // Connexion (utilisation des valeurs par défaut). 
    $connexion = mysqli_connect(); 
    if (! $connexion) { 
      exit('Echec de la connexion.'); 
    } 
    // Sélection de la base de données. 
    $ok = mysqli_select_db($connexion,'diane'); 
    if (! $ok) { 
      exit('Echec de la sélection de la base de données.'); 
    } 
    // Exécution de la requête de sélection. 
    $requête = "SELECT libelle FROM articles ORDER BY libelle"; 
    $résultat = mysqli_query($connexion,$requête); 
    // Lecture et affichage du résultat 
    while ($libelle = mysqli_fetch_column($résultat)) { 
      echo $libelle,'<br />'; 
    } 
    // Déconnexion. 
    $ok = mysqli_close($connexion); 
    ?>

    </div>
  </body>
</html>
