<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Enumérations</title>
    <style>
      h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt } 
    </style>
  </head>
  <body>
    <div>

    <h1>Déclaration et utilisation d'une énumération</h1>
    <?php
    // Définition d'une énumération.
    enum Couleur {
      case Bleu;
      case Blanc;
      case Rouge;
    }
    // Déclaration d'une constante initialisée avec une valeur de l'énumération.
    const BLANC = Couleur::Blanc;
    // Déclaration d'une fonction qui accepte un paramètre
    // qui doit être de ce type.
    function afficher_couleur(Couleur $couleur) {
      echo var_dump($couleur),'</br>'; // affichage de la variable
      echo $couleur ->name,'</br>'; // affichage de la propriété "name"
    }
    // Déclaration d'une fonction qui retourne un paramètre
    // qui doit être de ce type.
    function couleur_aléatoire() : Couleur {
      return Couleur::cases()[rand(0,2)];
    }
    // Affichage de la liste des valeurs de l'énumération
    echo 'Couleurs du drapeaux français : ' ;
    foreach (Couleur::cases() as $couleur) {
      echo $couleur ->name,' ';
    }
    echo '</br>';
    // Affectation d'une valeur de l'énumération à une variable.
    $couleur = Couleur::Bleu;
    // Appel de la fonction qui retourne une valeur de l'énumération.
    $couleur = couleur_aléatoire();
    // Appel de la fonction avec une valeur du bon type pour le paramètre.
    afficher_couleur($couleur);
    // Appel de la fonction avec une valeur du mauvais type pour le paramètre.
    try {
      afficher_couleur('Bleu');
    } catch (Error $e) {
      echo $e->getMessage(),'</br>';
    }
    ?>

    <h1>Déclaration et utilisation d'une énumération avec valeurs scalaires</h1>
    <?php
    enum Taille : int {
      case UN = 1;
      case DEUX = 2;
      case TROIS = 3;
    }
    echo Taille::UN->name,' = ', Taille::UN->value,'</br>';
    $taille = Taille::from(1);
    echo '1 => ',$taille->name,'</br>';
    $taille = Taille::tryFrom(2);
    echo '2 => ',$taille->name,'</br>';
    try {
      $taille = Taille::from(0); // lève une exception
      echo '0 => ',$taille?->name,'</br>';
    } catch (ValueError $e) {
      echo '0 => ',$e->getMessage(),'</br>';
    }
    $taille = Taille::tryFrom(0); // retourne null
    echo '0 => ',$taille?->name,'</br>';
    ?>
    
    <h1>Fonctionnalités supplémentaires sur les énumérations</h1>
    <?php
    // Définition d'une interface. 
    interface lecture { 
      function get() : string; 
    } 
    // Définition d'une énumération qui implémente l'interface.
    enum Niveau : int implements lecture {
      // Valeurs de l'énumération.
      case Débutant = 1;
      case Initié = 2;
      case Confirmé = 3;
      case Expert = 4;
      // Définition d'une constante.
      public const Maximum = self::Expert;
      // Méthode qui retourne des informations sur la valeur.
      public function information() : string {
        return "$this->name ($this->value)" ;
      }
      // Méthode statique qui retourne une valeur aléatoire de l'énumération.
      public static function hasard() : static {
        return static::from(rand(1,4)) ;
      }
      // Implémentation de la méthode de lecture. 
      public function get() : string { 
        return "[$this->value] $this->name" ;
      } }
    $niveau = Niveau::hasard(); // un niveau au hasard
    echo $niveau->information(),'</br>';
    echo $niveau->get(),'</br>';
    if ($niveau === Niveau::Maximum) { // comparaison avec le niveau maximum
      echo 'Niveau maximum, bravo !';
    } else {
      echo 'Encore un petit effort pour atteindre le niveau maximum.';
    }
    ?>
    <h1>Accès aux propriétés d'une énumération dans l'expression utilisée pour définir une constante</h1>
    <?php
    enum Orientation : int {
      case NORD = 1;
      case OUEST = 2;
      case SUD = 3;
      case EST = 4;
    }
    const N = Orientation::NORD->name;
    const S = Orientation::SUD->value;
    echo 'N = ',N,'</br>';
    echo 'S = ',S,'</br>';
    ?>
    
    </div>
  </body>
</html>
