<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Page Admin</title>
</head>
<body>
    <div class="connexion">
        <h2>Page Admin</h2>

        <?php
        include '../auth/check_admin.php';
        // Récupérer les quiz_id distincts
        $sqlQuiz = "SELECT DISTINCT quiz_id FROM quiz_responses ORDER BY quiz_id";
        $result = $conn->query($sqlQuiz);
        ?>

        <!-- Formulaire de recherche -->
        <form action="../../php/admin/recherche.php" method="post">
            <label for="nom">Rechercher par nom :</label>
            <input type="text" id="nom" name="nom" class="form-control"><br>

            <label for="prenom">Rechercher par prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control"><br>


            
            <label for="quiz_id">Numéro de Quiz :</label>
            <select id="quiz_id" name="quiz_id" class="form-control">
                <option value="">Tous les Quiz</option>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["quiz_id"] . "'>Quiz " . $row["quiz_id"] . "</option>";
                }
                ?>
            </select><br>

            <button type="submit" class="btn-connexion ourbtn">Rechercher</button>
        </form>
    </div>

    <!-- Résultats de la recherche affichés ici -->
    <div id="resultats"></div>

</body>
</html>
