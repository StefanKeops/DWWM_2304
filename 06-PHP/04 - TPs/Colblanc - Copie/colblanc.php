<?php
date_default_timezone_set('Europe/Paris');
?>

<!doctype html>
<html lang="Fr">

<head>
  <meta charset="utf-8">
  <title>Entrainement Centre de Readaptation</title>
  <link rel="stylesheet" media="screen" href="css/style.css">
</head>

<body>

  <div id="page1">
    <div id="header">
      <img src="contenu/header.jpg" width="980" height="176" alt="colblanc entete">
    </div>

    <div id="menu">
      <ul>
        <li><a href="#">Entreprises</a>
          <ul>
            <li><a href="#" target="_self">Visualiser</a></li>
            <li><a href="filtre.php">Rechercher</a></li>
            <li><a href="#">Ajouter</a></li>
          </ul>
        </li>
        <li><a href="#">Candidats</a>
          <ul>
            <li><a href="#" target="_self">Listing</a></li>
            <li><a href="#">rechercher</a></li>
            <li><a href="#">Ajouter</a></li>
            <li><a href="#">CVthèque</a></li>
          </ul>
        </li>
        <li><a href="#">Projets</a></li>
        <li><a href="#">offres</a>
          <ul>
            <li><a href="#">Par secteur</a></li>
            <li><a href="#">Par entreprises</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="page">
      <main>
        <section>
          <!-- Formularul din MyTable.php va fi inclus aici prin require -->
          <?php require "models/MyTable.php"; ?>

          <?php
          // Display search results only if the form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["valider"])) {
            $selectedDepartment = isset($_POST["departement"]) ? $_POST["departement"] : null;
            $selectedInstitutions = isset($_POST["institutions"]) ? $_POST["institutions"] : array();

            // Fetch results
            $results = $form->getInstitutions($selectedDepartment, $selectedInstitutions);

            // Display the search results
            if (!empty($results)) {
              echo "<h2>Résultats de la recherche :</h2>";

              // Begin the table with alternating row colors
              echo "<table border='1'>";
              echo "<tr>";
              echo "<th>Nom</th>";
              echo "<th>Type</th>";
              echo "<th>Responsable</th>";
              echo "<th>Lieu</th>";
              echo "<th>Téléphone</th>";
              echo "<th>Email</th>";
              echo "</tr>";

              $rowColor = 'even'; // Variable to alternate row colors
              foreach ($results as $result) {
                // Alternate row colors
                $rowColor = ($rowColor == 'even') ? 'odd' : 'even';

                // Apply the alternating color to the table row
                echo "<tr class='$rowColor'>";
                echo "<td>" . $result['nom_etab'] . "</td>";
                echo "<td>" . $result['type_etab'] . "</td>";
                echo "<td>" . $result['nom_resp'] . "</td>";
                echo "<td>" . $result['lieu'] . "</td>";
                echo "<td>" . $result['Telephone'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "</tr>";
              }

              echo "</table>";
            } else {
              echo "<p>Aucun résultat trouvé.</p>";
            }
          }
          ?>

        </section>
      </main>
    </div>
  </div>
</body>

</html>