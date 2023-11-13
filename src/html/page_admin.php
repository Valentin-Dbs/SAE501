<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <!-- Incluez les liens vers les fichiers CSS et JavaScript nécessaires ici -->
</head>

<body>
    <h2>Page Admin</h2>

    <!-- Formulaire de recherche -->
    <form action="../../php/admin/recherche.php" method="post">
        <label for="nom">Rechercher par nom :</label>
        <input type="text" id="nom" name="nom">
        <br>

        <label for="prenom">Rechercher par prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <br>

        <button type="submit">Rechercher</button>
    </form>

    <!-- Résultats de la recherche affichés ici -->
    <div id="resultats">
        <!-- Les résultats de la recherche seront affichés ici -->
    </div>

    <!-- Incluez les fichiers JavaScript ici si nécessaire -->
</body>

</html>
