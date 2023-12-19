<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Propriété ou méthode statique - Constante de classe</title>
  </head>
  <body>
    <div>

    <?php
    // Définition d'une classe.
    class UneClasse {
      // Propriété privé quelconque.
      private $x;
      // Propriété privé statique pour stocker
      // le nombre d'objets instanciés.
      static private $nombre = 0;
      // Constante de classe pour définir une valeur
      // par défaut.
      const DEFAUT = 'X';
      // Fonction publique statique qui retourne le
      // nombre d'objets.
      static public function nombreObjets() {
        return UneClasse::$nombre; // classe::$propriété
      }
      // Méthode constructeur
      // - récupérer la valeur de la propriété (valeur par défaut
      //   = la constante de classe)
      // - incrémenter le nombre d'objets
      public function __construct($valeur = self::DEFAUT) { // self::constante
        $this->x = $valeur;
        self::$nombre++; // self::$propriété
        echo "Création de l'objet : $this->x<br />";
      }
      // Méthode destructeur.
      // - décrémenter le nombre d'objets
      public function __destruct() {
        static::$nombre--; // static::$propriété
        echo "Suppression de l'objet : $this->x<br />";
      }
    }
    // Créer deux objets.
    $inconnu = new UneClasse();
    $abc = new UneClasse ('ABC');
    // Afficher le nombre d'objets
    echo UneClasse::nombreObjets(),' objet(s)<br />';
    // "Supprimer" un objet.
    unset($inconnu);
    // Afficher le nombre d'objets
    echo UneClasse::nombreObjets(),' objet(s)<br />'; // classe::méthode()
    echo $abc::nombreObjets(),' objet(s)<br />';      // objet::méthode()
    echo $abc->nombreObjets(),' objet(s)<br />';      // objet->méthode()
    // Afficher la valeur de la constante de classe
    echo 'UneClasse::DEFAUT = ',UneClasse::DEFAUT,'<br />'; // classe::constante
    echo '$abc::DEFAUT = ',$abc::DEFAUT,'<br />';           // objet::constante
    ?>
    
    </div>
  </body>
</html>
