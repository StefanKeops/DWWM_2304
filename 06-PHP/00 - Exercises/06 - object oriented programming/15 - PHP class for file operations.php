<?php

// Classe File
class File
{
    // Propriétés
    private $name;
    private $size;

    // Constructeur
    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    // Getter pour la taille du fichier
    public function getSize()
    {
        return $this->size;
    }

    // Méthode statique pour calculer la taille totale de plusieurs fichiers
    public static function calculateTotalSize($files)
    {
        $totalSize = 0;

        foreach ($files as $file) {
            if ($file instanceof File) {
                $totalSize += $file->getSize();
            } else {
                throw new Exception("L'objet passé n'est pas une instance de File.");
            }
        }

        return $totalSize;
    }
}

// Exemple d'utilisation
try {
    // Créer des instances de la classe File
    $file1 = new File("document1.txt", 1024); // 1024 bytes
    $file2 = new File("document2.txt", 2048); // 2048 bytes
    $file3 = new File("document3.txt", 3072); // 3072 bytes

    // Stocker les fichiers dans un tableau
    $files = [$file1, $file2, $file3];

    // Calculer la taille totale des fichiers en utilisant la méthode statique
    $totalSize = File::calculateTotalSize($files);

    // Afficher la taille totale
    echo "Taille totale des fichiers : " . $totalSize . " bytes<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
