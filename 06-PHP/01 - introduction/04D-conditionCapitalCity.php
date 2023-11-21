<?php
function capitalCity($pays) {
    switch ($pays) {
        case 'France':
            return 'Paris';
        case 'Allemagne':
            return 'Berlin';
        case 'Italie':
            return 'Rome';
        case 'Maroc':
            return 'Rabat';
        case 'Espagne':
            return 'Madrid';
        case 'Portugal':
            return 'Lisbonne';
        case 'Angleterre':
            return 'Londres';
        default:
            return 'Capitale inconnue';
    }
}
 
$resultat1 = capitalCity('France');
$resultat2 = capitalCity('Espagne');
$resultat3 = capitalCity('Canada');
 
echo $resultat1; echo'<br>';
echo $resultat2; echo'<br>';
echo $resultat3; 
?>