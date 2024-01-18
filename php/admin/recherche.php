<?php

include '../auth/check_admin.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Site Parcousup</title>
</head>

<body>

    <div class="div-centre" style="display: flex; flex-direction: column;">
            <?php
                // Récupération des valeurs du formulaire
                $nom = $_POST['nom'] ?? '';
                $prenom = $_POST['prenom'] ?? '';
                $QuizId = $_POST['QuizId'] ?? '';

                $sqlRecherche = "SELECT * FROM vue_quiz_responses";
                $conditions = [];
                $params = [];
                $types = '';

                if (!empty($nom)) {
                    $conditions[] = "Nom LIKE ?";
                    $params[] = "%$nom%";
                    $types .= 's'; // type string
                }

                if (!empty($prenom)) {
                    $conditions[] = "Prenom LIKE ?";
                    $params[] = "%$prenom%";
                    $types .= 's'; // type string
                }

                if (!empty($QuizId)) {
                    $conditions[] = "QuizId = ?";
                    $params[] = $QuizId;
                    $types .= 'i'; // type integer
                }

                if (!empty($conditions)) {
                    $sqlRecherche .= " WHERE " . join(" AND ", $conditions);
                }

                $stmtRecherche = $conn->prepare($sqlRecherche);

                if (!$stmtRecherche) {
                    // Gestion de l'erreur
                    echo "Erreur lors de la préparation de la requête : " . $conn->error;
                    exit;
                }

                if (!empty($params)) {
                    $stmtRecherche->bind_param($types, ...$params);
                }

                $stmtRecherche->execute();
                $resultats = $stmtRecherche->get_result();

                // Initialisation des statistiques
                $totalReponses = 0;
                $nombreFausses = 0;
                $nombreVraies = 0;

                echo '<link rel="stylesheet" type="text/css" href="../../style.css">';
                echo '<div style="display: flex; justify-content: space-between; width: 95%;">
        <a href="page_admin.php">
          <button class="btnAdmin">Rechercher</button>
        </a>

                <form action="../auth/deconnexion.php" method="post">
                    <button type="submit" class="btnAdmin">Déconnexion</button>
                </form>
                </div>';
                echo "<h3>Résultats de la recherche :</h3>";
                echo "<table border='1'>
                        <tr class='tbl-name'>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Question</th>
                            <th>Réponse Choisie</th>
                            <th>Est Correcte</th>
                            <th>Temps de Réponse</th>
                        </tr>";

                while ($row = $resultats->fetch_assoc()) {
                    $estCorrecte = $row["EstCorrecte"] == 1 ? "Oui" : "Non";
                    $totalReponses++;
                    if ($row["EstCorrecte"] == 1) {
                        $nombreVraies++;
                    } else {
                        $nombreFausses++;
                    }

                    echo "<tr>
                            <td>" . htmlspecialchars($row["Nom"]) . "</td>
                            <td>" . htmlspecialchars($row["Prenom"]) . "</td>
                            <td>" . htmlspecialchars($row["Question"]) . "</td>
                            <td>" . htmlspecialchars($row["ReponseChoisie"]) . "</td>
                            <td>" . $estCorrecte . "</td>
                            <td>" . htmlspecialchars($row["TempsReponse"]) . "</td>
                        </tr>";
                }

                // Ajout de la ligne de statistiques
                echo "<tr>
                        <td colspan='6'>
                            Total Réponses: $totalReponses | Réponses Fausses: $nombreFausses | Réponses Vraies: $nombreVraies
                        </td>
                    </tr>";

                echo "</table></div>";

                $conn->close();
            ?>
        <!-- <div style="width: 100%">
        </div> -->
    </div>
</body>

</html>