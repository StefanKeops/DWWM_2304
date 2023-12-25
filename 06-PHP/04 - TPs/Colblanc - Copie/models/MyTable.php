<?php
require "Connexion.php";

class MyTableForm
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getDepartments()
    {
        $query = "SELECT id_dep, name_dep FROM departements";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInstitutions($selectedDepartment, $selectedInstitutions)
    {
        $query = "SELECT nom_etab, type_etab, nom_resp, CONCAT(adresse, ' ', cp, ' ', ville) AS lieu, Telephone, email FROM institutions WHERE 1";

        // Add conditions based on the selected department
        if (!empty($selectedDepartment)) {

            $query .= " AND id_dep = :selectedDepartment";
        }

        // Add conditions based on the selected types of establishments
        if (!empty($selectedInstitutions)) {
            $placeholders = implode(', ', array_map(function ($key) {
                return ":type_etab{$key}";
            }, array_keys($selectedInstitutions)));

            $query .= " AND type_etab IN ({$placeholders})";
        } else {
            // Add a default condition to handle the case when no type is selected
            $query .= " AND 1 = 1";
        }

        // Prepare and execute the query
        $statement = $this->connection->prepare($query);

        // Bind the selected department if applicable
        if (!empty($selectedDepartment)) {
            $statement->bindParam(':selectedDepartment', $selectedDepartment, PDO::PARAM_INT);
        }

        // Bind the selected types of establishments
        foreach ($selectedInstitutions as $key => $value) {
            $paramName = ":type_etab{$key}";
            $statement->bindParam($paramName, $value, PDO::PARAM_STR);
        }

        // Execute the query
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Obțineți instanța conexiunii la baza de date
$connection = Connexion::getinstance();

// Creați o instanță a formularului
$form = new MyTableForm($connection);

// Obțineți datele pentru meniul derulant din tabelul departements
$departments = $form->getDepartments();

// Define $institutions here or fetch it based on your requirements
$selectedDepartment = isset($_POST["departement"]) ? $_POST["departement"] : null;
$selectedInstitutions = isset($_POST["institutions"]) ? $_POST["institutions"] : array();
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

    <div id="page">
        <main>
            <section>
                <h1 style="text-align:center">Votre travail ici</h1>

                <!-- Formularul -->
                <form action="colblanc.php" method="post">
                    <div style="display: inline-block; margin-right: 10px;">
                        <label for="departement">Choisissez votre département :</label>
                        <select name="departement" id="departement">
                            <?php foreach ($departments as $department) : ?>
                                <option value="<?= $department['id_dep'] ?>"><?= $department['name_dep'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Adăugare câmp pentru afișarea numărului de rezultate -->
                    <div class="result-count" style="display: inline-block; margin-right: 10px;">
                        <?php
                        $selectedDepartmentsCount = isset($_POST['departement']) ? 1 : 0;
                        $selectedInstitutionsCount = isset($_POST['institutions']) ? count($_POST['institutions']) : 0;

                        $totalCount = $selectedDepartmentsCount + $selectedInstitutionsCount;
                        echo "Résultat de la recherche: $totalCount";
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

                            // Define the desired order
                            $order = array('TPE', 'PME', 'GE', 'CT', 'ASSOC', 'AUTRES');

                            // Sort the unique types based on the desired order
                            usort($uniqueTypes, function ($a, $b) use ($order) {
                                return array_search($a, $order) - array_search($b, $order);
                            });

                            foreach ($uniqueTypes as $type) : ?>
                                <label style="display: block;">
                                    <input type="checkbox" name="institutions[]" value="<?= $type ?>">
                                    <?= $type ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" name="valider">Valider</button>
                    </div>

                    <div style="text-align: left;">
                        <button onclick="window.print()">Imprimer</button>
                    </div>

                    <hr>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["valider"])) {
                        $selectedDepartment = $_POST["departement"];
                        $selectedInstitutions = isset($_POST["institutions"]) ? $_POST["institutions"] : array();

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["valider"])) {
                            $selectedDepartmentsCount = isset($_POST['departement']) ? 1 : 0;
                            $selectedInstitutionsCount = isset($_POST['institutions']) ? count($_POST['institutions']) : 0;

                            $totalCount = $selectedDepartmentsCount + $selectedInstitutionsCount;
                            echo "<p>Résultat de la recherche: $totalCount</p>";

                            // Afișăm informațiile despre departamente și tipuri de întreprinderi selectate din baza de date
                            if ($selectedDepartmentsCount > 0) {
                                echo "<p>Département sélectionné : $selectedDepartment</p>";
                            }

                            if ($selectedInstitutionsCount > 0) {
                                echo "<p>Types d'établissements sélectionnés : </p>";
                                echo "<ul>";
                                foreach ($_POST['institutions'] as $selectedInstitutionType) {
                                    // Puteți adapta aceasta pentru a afișa informații specifice din baza de date
                                    echo "<li>$selectedInstitutionType</li>";
                                }
                                echo "</ul>";
                            }

                            // Puteți adăuga și alte acțiuni de procesare sau afișare aici, dacă este necesar
                        }

                        // Puteți adăuga orice alte acțiuni de procesare a datelor aici
                    }
                }
                ?>

            </section>
        </main>
    </div>
</body>

</html>