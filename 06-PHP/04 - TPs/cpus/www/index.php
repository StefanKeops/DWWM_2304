<?php

require_once 'config.php';
require_once 'model.php';
require_once 'controller.php';

$controller = new CPUController();

// gestionarea trimiterii formularelor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $family = $_POST["family"];
    $model = $_POST["model"];
    $mhz = $_POST["mhz"];

    $controller->addCPU($family, $model, $mhz);
}

// obtinerea procesoarelor
$cpus = $controller->getAllCPUs();
?>

<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les CPUs en vente</title>
    <link rel="stylesheet" href="./assets/cpus.css">
</head>

<body>
    <header>
        <h1>Les micro-processeurs INTEL en vente</h1>
    </header>
    <main>

        <h2>Ajouter un nouveau micro-processeur</h2>

        <p>
        <form method="post" action="">
            <label for="family">Famille:</label>
            <input type="text" id="family" name="family" maxlength="3" required>
            <br>

            <label for="model">Modèle:</label>
            <input type="text" id="model" name="model" pattern="[A-Za-z0-9]{6,7}" required>
            <br>

            <label for="mhz">Fréquence de base (Mhz):</label>
            <input type="number" id="mhz" name="mhz" min="1600" max="5000" required>
            <br>

            <input type="submit" value="Ajouter">
        </form>
        </p>

        <h2>Liste des micro-processeurs disponibles</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Famille</th>
                    <th>Modèle</th>
                    <th>Fréquence de base</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cpus as $cpu) : ?>
                    <tr>
                        <td><?php echo $cpu['cpu_id']; ?></td>
                        <td><?php echo $cpu['cpu_family']; ?></td>
                        <td><?php echo $cpu['cpu_model']; ?></td>
                        <td><?php echo $cpu['cpu_mhz']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

</body>

</html>