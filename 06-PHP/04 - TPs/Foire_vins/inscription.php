<?php
date_default_timezone_set('Europe/Paris');
session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection class
    require "models/Connexion.php";
 
    // Function to sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    // Retrieve and sanitize form data
    $nom = sanitizeInput($_POST["nom"]);
    $prenom = sanitizeInput($_POST["prenom"]);
    $email = sanitizeInput($_POST["email"]);
    $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT); // Hash the password securely
    $departement_user = sanitizeInput($_POST["departement"]);
    $age = sanitizeInput($_POST["age"]);
    $verifmdp = sanitizeInput($_POST["verifmdp"]);
 
    // Password verification
    if ($_POST["mdp"] !== $verifmdp) {
        $_SESSION['error_message'] = "Erreur : Les mots de passe ne correspondent pas.";
    } else {
        try {
            // Get a PDO instance
            $monPDO = Connexion::getinstance();
 
            // Prepare and execute the SQL statement to insert data into the 'candidats' table
            $stmt = $monPDO->prepare("INSERT INTO candidats (lastname_user, firstname_user, mail_user, pass_user, departement_user, age_user) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $email, $mdp, $departement_user, $age]);
 
            // Success message
            $_SESSION['success_message'] = "Votre inscription a bien été validée, nous allons vous contacter prochainement.";
 
            // Redirect to a success page
            header("Location: success.php");
            exit();
        } catch (PDOException $e) {
            // Error message
            $_SESSION['error_message'] = "Opération impossible, veuillez recommencer!";
        }
    }
}
 
function displayDepartmentsDropdown() {
    try {
        // Include the database connection class
        require "models/Connexion.php";
 
        // Get a PDO instance
        $monPDO = Connexion::getinstance();
 
        // Prepare and execute the SQL statement to retrieve departments
        $stmt = $monPDO->prepare("SELECT id_dep, name_dep FROM departements WHERE dep_actif=1");
        $stmt->execute();
 
        // Display department dropdown
        echo '<select name="departement" id="departement">';
        echo '<option value="">Choisir un Département</option>';
 
        // Display department options
        while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $ligne['id_dep'] . '">' . $ligne['name_dep'] . ' </option>';
        }
 
        echo '</select>';
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription </title>
</head>

<body>
    <!-- Display success or error messages -->
    <?php
    if (isset($_SESSION['success_message'])) {
        echo '<p>' . $_SESSION['success_message'] . '</p>';
        unset($_SESSION['success_message']); // Clear the message
    } elseif (isset($_SESSION['error_message'])) {
        echo '<p>' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']); // Clear the message
    }
    ?>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">

        <section>
            <label for="nom">Nom</label>
            <br>
            <input type="text" name="nom" id="nom" placeholder="votre nom">
        </section>
        <section>
            <label for="prenom">Prénom</label>
            <br>
            <input type="text" name="prenom" id="prenom" placeholder="votre prénom">
        </section>
        <section>
            <label for="email">email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="identifiant">
        </section>
        <section>
            <label for="mdp">Mot de passe</label>
            <br>
            <input type="password" name="mdp" id="mdp">
            <br>
            <label for="verifmdp">Vérification du Mot de passe</label>
            <br>
            <input type="password" name="verifmdp" id="verifmdp">
        </section>
        <section>
            <label for="avatar">Charger votre avatar</label>
            <br>
            <input type="file" name="avatar" id="avatar" accept="img/jpg,img/png">
        </section>
        <section>
            <label for="departement">Département de votre domicile principale</label>
            <br>
            <select name="departement" id="departement">
                <option value="">Choisir un Département</option>
                <?php
                try {
                    // Include the database connection class
                    require "models/Connexion.php";

                    // Get a PDO instance
                    $monPDO = Connexion::getinstance();

                    // Prepare and execute the SQL statement to retrieve departments
                    $stmt = $monPDO->prepare("SELECT id_dep, name_dep FROM departements WHERE dep_actif=1");
                    $stmt->execute();

                    // Display department options
                    while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $ligne['id_dep'] . '">' . $ligne['name_dep'] . ' </option>';
                    }
                } catch (PDOException $e) {
                    die("Error: " . $e->getMessage());
                }
                ?>
            </select>
        </section>
        <section>
            <label for="age">Votre age</label>
            <br>
            <input type="number" name="age" id="age" placeholder="18" step="1" min="16" max="110">
        </section>
        <section>
            <input type="submit" value="valider" name="validation" id="validation">
        </section>
    </form>
</body>

</html>