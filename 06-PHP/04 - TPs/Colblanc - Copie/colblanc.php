<?php
date_default_timezone_set('Europe/Paris');
require "/models/MyTable.php";

// conexiuniea la baza de date
$connection = Connexion::getinstance();

// instanța formularului
$form = new MyTableForm($connection);

// datele pentru meniul derulant din tabelul departements
$departments = $form->getDepartments();

// constante
define('DEPARTMENT_KEY', 'departement');
define('INSTITUTIONS_KEY', 'institutions');
define('VALIDER_KEY', 'valider');

// datele formularului
$selectedDepartment = isset($_POST[DEPARTMENT_KEY]) ? $_POST[DEPARTMENT_KEY] : null;
$selectedInstitutions = isset($_POST[INSTITUTIONS_KEY]) ? $_POST[INSTITUTIONS_KEY] : array();
$institutions = $form->getInstitutions($selectedDepartment, $selectedInstitutions);
?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Entraînement Centre de Réadaptation</title>
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
          <!-- Formularul -->
          <form action="colblanc.php" method="post">
            <div style="display: inline-block; margin-right: 10px;">
              <label for="<?= DEPARTMENT_KEY ?>">Choisissez votre département :</label>
              <select name="<?= DEPARTMENT_KEY ?>" id="<?= DEPARTMENT_KEY ?>">
                <?php foreach ($departments as $department) : ?>
                  <option value="<?= $department['id_dep'] ?>"><?= $department['name_dep'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Adăugare câmp pentru afișarea numărului de rezultate -->
            <div class="result-count" style="display: inline-block; margin-right: 10px;">
              <?php
              $selectedDepartmentsCount = isset($_POST[DEPARTMENT_KEY]) ? 1 : 0;
              $selectedInstitutionsCount = isset($_POST[INSTITUTIONS_KEY]) ? count($_POST[INSTITUTIONS_KEY]) : 0;

              $totalCount =  $selectedInstitutionsCount;
              ?>
            </div>

            <hr>

            <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
              <div style="width: 48%; display: inline-block; margin-right: 10px; text-align: center;">
                <p>Sélectionnez votre type d'établissement:</p>
              </div>

              <div style="width: 48%; display: inline-block;">
                <?php
                $uniqueTypes = array();
                foreach ($institutions as $institution) {
                  if (!in_array($institution['type_etab'], $uniqueTypes)) {
                    $uniqueTypes[] = $institution['type_etab'];
                  }
                }

                // definirea ordinii
                $order = array('TPE', 'PME', 'GE', 'CT', 'ASSOC', 'AUTRES');

                // sortarea tipurilor 
                usort($uniqueTypes, function ($a, $b) use ($order) {
                  return array_search($a, $order) - array_search($b, $order);
                });

                foreach ($uniqueTypes as $type) : ?>
                  <label style="display: block;">
                    <input type="checkbox" name="<?= INSTITUTIONS_KEY ?>[]" value="<?= $type ?>">
                    <?= $type ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div style="text-align: center;">
              <button type="submit" name="<?= VALIDER_KEY ?>">Valider</button>
            </div>

            <div style="text-align: left;">
              <button onclick="window.print()">Imprimer</button>
            </div>

            <hr>
          </form>

          <?php
          $institutions = array();

          if ($institutions = $form->getInstitutions($selectedDepartment, $selectedInstitutions)
          ) {
            $selectedDepartmentsCount = $selectedDepartment ? 1 : 0;
            $selectedInstitutionsCount = count($selectedInstitutions);

            $totalCount = $selectedInstitutionsCount;

            // Verificarea dacă există rezultate pentru a afișa
            if ($totalCount > 0) {
              // Afișare tabel rezultate
              echo "<h2>Résultats de la recherche :</h2>";
              echo "<table border='1'>";
              echo "<tr>";
              echo "<th>Nom</th>";
              echo "<th>Type</th>";
              echo "<th>Responsable</th>";
              echo "<th>Lieu</th>";
              echo "<th>Téléphone</th>";
              echo "<th>Email</th>";
              echo "</tr>";

              $rowColor = 'even';
              foreach ($institutions as $result) {
                $rowColor = ($rowColor == 'even') ? 'odd' : 'even';
                echo "<tr class='$rowColor'>";
                echo "<td>" . htmlspecialchars($result["nom_etab"]) . "</td>";
                echo "<td>" . htmlspecialchars($result["type_etab"]) . "</td>";
                echo "<td>" . htmlspecialchars($result["nom_resp"]) . "</td>";
                echo "<td>" . htmlspecialchars($result["lieu"]) . "</td>";
                echo "<td>" . htmlspecialchars($result["Telephone"]) . "</td>";
                echo "<td>" . htmlspecialchars($result["email"]) . "</td>";
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
</body>

</html>