<?php
// Est-ce que la page est appelée avec le paramètre "source" 
// dans l'URL ?
$afficher_source = isset($_GET['source']);
if ($afficher_source) {
  // Oui.
  // Il faut afficher le code source d'une page.
  $titre_page = "Source de {$_GET['source']}";  
  $source = $_GET['source'];
} else {
  // Non.
  // Il faut afficher une liste de liens.
  $titre_page = 'Chapitre 4';
  // Liste des liens.
  $liens['<1>'] = 'Fonctions';
  $liens['./fonctions/01-exemples-fonctions.php'] = 'Exemples de fonctions';
  $liens['./fonctions/02-type-retour.php'] = 'Déclaration du type de données de retour';
  $liens['./fonctions/03-type-retour-strict.php'] = 'Déclaration du type de données de retour (typage strict)';
  $liens['./fonctions/04-fonction-variable.php'] = 'Fonction variable';
  $liens['./fonctions/05-parametre-defaut.php'] = 'Paramètres : valeur par défaut';
  $liens['./fonctions/06-parametre-type.php'] = 'Paramètres : déclaration du type de données';
  $liens['./fonctions/07-parametre-type-null.php'] = 'Paramètres : déclaration du type de données (NULL accepté)';
  $liens['./fonctions/08-parametre-type-strict.php'] = 'Paramètres : déclaration du type de données (typage strict)';
  $liens['./fonctions/09-parametre-reference.php'] = 'Paramètres : passage par référence';
  $liens['./fonctions/10-parametre-variable.php'] = 'Paramètres : liste variable de paramètres';
  $liens['./fonctions/11-parametre-nom.php'] = 'Paramètres : utilisation du nom du paramètre dans l\'appel';
  $liens['./fonctions/12-variable-globale.php'] = 'Variable locale / globale';
  $liens['./fonctions/13-variable-statique.php'] = 'Variable statique';
  $liens['./fonctions/14-constante.php'] = 'Les constantes et les fonctions';
  $liens['./fonctions/15-fonction-recursive.php'] = 'Exemple de fonction récursive';
  $liens['./fonctions/16-fonction-anonyme.php'] = 'Fonction anonyme';
  $liens['./fonctions/17-fonction-flechee.php'] = 'Fonction fléchée';
  $liens['./fonctions/18-fonction-generateur.php'] = 'Fonction générateur';
  $liens['<2>'] = 'Classes';
  $liens['./classes/01-utiliser-classe.php'] = 'Exemple de classe';
  $liens['./classes/01-utiliser-classe-variable-expression.php'] = 'Instanciation à l\'aide d\'une variable ou d\'une expression';
  $liens['./classes/01-utiliser-classe-nullsafe.php'] = 'Utilisation de l\'opérateur nullsafe';
  $liens['./classes/02-classe-heritage.php'] = 'Héritage de classe';
  $liens['./classes/03-classe-abstraite.php'] = 'Classe ou méthode abstraite';
  $liens['./classes/04-classe-interface.php'] = 'Interface';
  $liens['./classes/05-attribut-methode-statique.php'] = 'Attribut ou méthode statique - Constante de classe';
  $liens['./classes/06-constructeur-statique.php'] = 'Utilisation d\'une méthode statique comme constructeur';
  $liens['./classes/07-traits.php'] = 'Traits';
  $liens['./classes/08-classe-anonyme.php'] = 'Classe anonyme';
  $liens['./classes/09-exceptions.php'] = 'Exceptions';
  $liens['./classes/10-enumerations.php'] = 'Énumérations';
  $liens['./classes/11-namespace.php'] = 'Espace de nom';
}
// Inclure le fichier qui va afficher la page.
include('../include/index-chapitre.inc.php');
?>
