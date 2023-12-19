<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exemple de classe</title>
  </head>
  <body>
    <div>

    <?php
    // Inclusion du fichier qui contient la définition de la 
    // classe Utilisateur présentée précédemment.
    include('01-classes.inc.php');
    // Instanciation d'un objet.
    $moi = new Utilisateur('Olivier','Heurtel');
    // La variable $moi contient maintenant un objet basé sur la 
    // classe utilisateur. Les méthodes sont accessibles par 
    // l'opérateur ->.
    // Utilisation des méthodes de l'objet.
    echo "{$moi->informations()} <br/>";
    $moi->langue('en_US');  // modification de la langue
    echo "{$moi->informations()} <br/>";
    // Modification et lecture directe d'une propriété publique.
    $moi->nom = strtoupper($moi->nom);
    echo "$moi->nom <br />";
    // Affichage direct de l'objet => utilisation de __toString.
    echo "$moi <br />";
    // Appel d'une méthode lors de l'instanciation d'un objet.
    $informations = (new Utilisateur('Victor','Hugo'))->informations();
    echo "$informations <br/>";
    ?>

    </div>
  </body>
</html>
