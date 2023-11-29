<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Mensualité</title>
</head>
<body>
    <form action="calculMensualite.php" method="POST">
        <label for="capital">Capital emprumuté (€): </label>
        <input type="number" name="capital" required><br>

        <label for="taux">Taux d'intérêt annuel (%): </label>
        <input type="number" name="taux" required><br>

        <label for="annees">Nombre d'années de remboursement: </label>
        <input type="number" name="annees" required><br>

        <input type="submit" value="Valider">
    </form>
</body>
</html>