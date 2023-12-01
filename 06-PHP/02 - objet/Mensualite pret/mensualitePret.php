<?php
include 'Mensualite.php';

$capital = isset($_POST['capital']) ? $_POST['capital'] : 0;
$taux = isset($_POST['taux']) ? $_POST['taux'] : 0;
$annees = isset($_POST['annees']) ? $_POST['annees'] : 0;

// Validarea datelor
if (!is_numeric($capital) || !is_numeric($taux) || !is_numeric($annees) || $capital <= 0 || $taux <= 0 || $annees <= 0) {
    die("Invalid input. Please enter valid numeric values.");
}

$somme = new Mensualite($capital, $taux, $annees);
$result = $somme->CalculerAmortissement();

$mensualite = $result['mensualite'];
$tableauAmortissement = $result['tableauAmortissement'];

echo 'Vous avez à payer une mensualité de ' . number_format($mensualite, 2, ',', ' ') . ' €.';

if (is_array($tableauAmortissement)) {
    echo '<h2>Tableau d\'amortissement:</h2>';
    echo '<table border="1">
            <tr>
                <th>Mois</th>
                <th>Intérêts</th>
                <th>Part Amortissement</th>
                <th>Capital Restant</th>
            </tr>';

    foreach ($tableauAmortissement as $row) {
    echo '<tr>
            <td>' . $row['mois'] . '</td>
            <td>' . round($row['interets'], 2) . ' €</td>
            <td>' . round($row['partAmortissement'], 2) . ' €</td>
            <td>' . round($row['capitalRestant'], 2) . ' €</td>
          </tr>';
}

    echo '</table>';
} else {
    echo '<p>No amortization table data available.</p>';
}
?>