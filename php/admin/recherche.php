<?php

// Inclusion du fichier de connexion à la base de données
include '../database/database_connection.php';

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero_etudiant = isset($_POST['numero_etudiant']) ? $_POST['numero_etudiant'] : null;

// Récupération des valeurs du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';

// Utilisation de ces valeurs pour effectuer une recherche dans la vue
$sqlRecherche = "SELECT * FROM vue_quiz_responses WHERE Nom = ? AND Prenom = ?";
$stmtRecherche = $conn->prepare($sqlRecherche);
$stmtRecherche->bind_param("ss", $nom, $prenom);
$stmtRecherche->execute();
$resultats = $stmtRecherche->get_result();

// Affichage des résultats de la recherche
echo "<h3>Résultats de la recherche :</h3>";
echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Question</th>
            <th>Réponse Choisie</th>
            <th>Est Correcte</th>
            <th>Temps de Réponse en secondes</th>
        </tr>";

while ($row = $resultats->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["Nom"] . "</td>
            <td>" . $row["Prenom"] . "</td>
            <td>" . $row["Question"] . "</td>
            <td>" . $row["ReponseChoisie"] . "</td>
            <td>" . $row["EstCorrecte"] . "</td>
            <td>" . $row["TempsReponse"] . "</td>
          </tr>";
}

echo "</table>";

// Fermeture de la connexion à la base de données
$conn->close();

?>
