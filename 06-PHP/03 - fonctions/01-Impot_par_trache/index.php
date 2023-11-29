<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'impôt</title>
</head>
<body>
    <form action="resultatImpot.php" method="post">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" required><br>

        <label for="revenu">Revenu: </label>
        <input type="number" name="revenu" required><br>

        <input type="submit" value="OK">
    </form>
</body>
</html>