<?php
require('models/MyTable.php');

// Obține datele procesate
$eRepublikData = fetchDataFromDatabase();

// Verifică dacă s-au obținut date valide
if ($eRepublikData) {
    // Continuă cu generarea paginii HTML asemănătoare cu exemplul anterior
    echo '<!DOCTYPE html>
    <html lang="fr-fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eRepublik Top Air Clasament</title>
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
        <header>
            <img src="./data/eRepublik antet.png" alt="eRepublik antet">
        </header>
        <main>
            <h1>eRepublik Top Air Clasament</h1>
            <!-- Adaugă meniul derulant -->
            <select>
                <option value="all">All the countries</option>';

    // Afisează opțiunile țărilor
    foreach (array_unique(array_column($eRepublikData['rows'], 'tara')) as $country) {
        echo '<option value="' . $country . '">' . $country . '</option>';
    }

    echo '</select>
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Citizen\'s ID</th>
                        <th>Citizen\'s name</th>
                        <th>Country</th>
                        <th>Top Aviator medals</th>
                        <th>Days</th>
                    </tr>
                </thead>
                <tbody>';

    // Iterează prin rânduri și afișează datele
    foreach ($eRepublikData['rows'] as $index => $citizenData) {
        echo '<tr>
            <td>' . ($index + 1) . '</td>
            <td>' . $citizenData['id'] . '</td>
            <td><a href="https://www.erepublik.com/en/citizen/profile/' . $citizenData['id'] . '" target="_blank">' . $citizenData['nume'] . '</a></td>
            <td>' . $citizenData['tara'] . '</td>
            <td>' . $citizenData['medalii'] . '</td>
            <td>' . $citizenData['zile'] . '</td>
        </tr>';
    }

    echo '</tbody>
            </table>
        </main>
    </body>
    </html>';
} else {
    echo 'No data found';
}
?>