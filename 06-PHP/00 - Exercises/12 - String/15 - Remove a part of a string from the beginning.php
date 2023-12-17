<?php

// Chaîne à traiter
$chaine = 'rayy@example.com';

// Partie à supprimer (par exemple, 'rayy@')
$partieASupprimer = 'rayy@';

// Supprimer la partie depuis le début de la chaîne
$nouvelleChaine = substr($chaine, strlen($partieASupprimer));

// Afficher la nouvelle chaîne
echo "La nouvelle chaîne après avoir supprimé '$partieASupprimer' est : $nouvelleChaine";

?>
