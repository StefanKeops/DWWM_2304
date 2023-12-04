<?php

include 'connexion.php';

function afficherTableauRestaurants($connexion) {
    $result = mysqli_query($connexion, "SELECT * FROM restaurants");

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nom restaurant</th>
                <th>Adresse restaurant</th>
                <th>Prix </th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Date visite</th>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['adresse']}</td>
                    <td>{$row['prix']}</td>
                    <td>{$row['Commentaire']}</td>
                    <td>{$row['Note']}</td>
                    <td>{$row['visite']}</td>
                </tr>";
            }
            echo "</table>";
    }else{
        echo "Aucun restaurant trouvé.";
    }
}
?>