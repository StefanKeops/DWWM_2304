<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Déclaration du type de données de retour</title>
  </head>
  <body>
    <div>

    <?php
    
    // Déclaration de 2 fonctions qui retournent le produit
    // des 2 paramètres, la deuxième spécifiant un type
    // de données "entier" pour la valeur de retour.
    function produit1($valeur1,$valeur2) {
      return $valeur1 * $valeur2;
    }
    function produit2($valeur1,$valeur2) : int {
      return $valeur1 * $valeur2;
    }
    // Appel des deux fonctions avec les mêmes paramètres
    echo 'produit1(20,1/7) => ',var_dump(produit1(20,1/7)),'<br />';
    // @produit2 pour ne pas afficher les erreurs (notamment les erreurs
    // de niveau E_DEPRECATED)
    echo 'produit2(20,1/7) => <b>',var_dump(@produit2(20,1/7)),'</b><br />';
    echo '<b> // Les erreurs de niveau E_DEPRECATED ne sont pas affichées.</b><br />';
    
    // Déclaration et appel d'une fonction qui spécifie un  
    // type de donnée de retour qui peut être NULL 
    function cube($valeur) : ?int { 
      if (is_null($valeur)) {
        return NULL;
      } else {
       return $valeur ** 3 ;
      } 
    } 
    echo 'cube(2) => <b>',var_dump(cube(2)),'</b><br />'; 
    echo 'cube(NULL) => <b>',var_dump(cube(NULL)),'</b><br />'; 

    // Déclaration et appel d’une fonction
    // déclarée comme ne retournant rien.  
    function afficher_bonjour() : void { 
      echo 'Bonjour !<br />'; 
    } 
    afficher_bonjour(); 
    
    // Déclaration et appel d'une fonction qui spécifie une  
    // union de types comme type de donnée de retour et qui  
    // peut être NULL ou FALSE
    function puissance4($valeur) : int|float|null|false { 
      if (is_null($valeur)) {
        return NULL;
      } elseif ($valeur == 0) { // Pour une raison quelconque
        return FALSE;           // retourner FALSE dans ce cas.
      } else {
       return $valeur ** 4 ;
      } 
    } 
    echo 'puissance4(2) => <b>',var_dump(puissance4(2)),'</b><br />'; 
    echo 'puissance4(2.5) => <b>',var_dump(puissance4(2.5)),'</b><br />'; 
    echo 'puissance4(0) => <b>',var_dump(puissance4(0)),'</b><br />'; 
    echo 'puissance4(NULL) => <b>',var_dump(puissance4(NULL)),'</b><br />'; 

    // Déclaration et appel d'une fonction qui doit retourner un 
    // tableau mais qui retourne une chaîne de caractères.
    function qui() : array { 
      return 'Olivier Heurtel'; 
    } 
    echo 'qui()[0] = ',qui()[0];
    
    ?>

    </div>
  </body>
</html>
