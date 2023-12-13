<?php
// Nom du fichier texte
$nomFichier = "fichier.txt";

try {
    // Ouvrir le fichier en mode lecture
    $handle = fopen($nomFichier, "r");

    // Vérifier si l'ouverture du fichier a réussi
    if ($handle) {
        // Lire le contenu du fichier
        $contenu = fread($handle, filesize($nomFichier));

        // Fermer le fichier
        fclose($handle);

        // Afficher le contenu du fichier
        echo "Contenu du fichier $nomFichier :\n\n";
        echo $contenu;
    } else {
        // Afficher un message d'erreur si le fichier ne peut pas être ouvert
        echo "Impossible d'ouvrir le fichier $nomFichier.";
    }
} catch (Exception $e) {
    // Afficher le message d'erreur en cas d'exception
    echo "Une erreur s'est produite : " . $e->getMessage();
}
?>
