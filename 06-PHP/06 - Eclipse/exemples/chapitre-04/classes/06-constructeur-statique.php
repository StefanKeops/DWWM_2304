<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Utilisation d'une méthode statique comme constructeur</title>
  </head>
  <body>
    <div>

    <?php 
    // Définition d'une classe.
    class Utilisateur { 
      // Attributs de la classe.
      private string $prénom;
      private string $nom;
      // Méthode constructeur privée.
      private function __construct(string $prénom,string $nom) { 
        $this->prénom = $prénom;
        $this->nom = $nom;
      } 
      // Première méthode statique pour créer un objet.
      public static function créerBasique(string $prénom,string $nom): static { 
        return new static($prénom, $nom);
      }
      // Deuxième méthode statique pour créer un objet.
      public static function créerTableau(array $data): static { 
        return new static($data['prénom'],$data['nom']);
      }
      // Troisième méthode statique pour créer un objet.
      public static function créerCSV(string $csv): static { 
        $data = str_getcsv($csv);
        return new static($data[0],$data[1]);
      }
      // Pour afficher l'objet.
      public function __toString() { 
        return "$this->prénom $this->nom";
      }
    } 
    // Création de trois objets avec les trois méthodes statiques.
    $moi = Utilisateur::créerBasique('Olivier','Heurtel'); 
    echo $moi,'<br />';
    $lui = Utilisateur::créerTableau(['prénom'=>'Victor','nom'=>'Hugo']); 
    echo $lui,'<br />';
    $autre = Utilisateur::créerCSV('Arthur,Rimbaud'); 
    echo $autre,'<br />';
    ?>
    
    </div>
  </body>
</html>
