<?php
$servername = "localhost";  // Serveur de la base de données (généralement "localhost" pour WAMP)
$username = "root";         // Nom d'utilisateur MySQL
$password = "";             // Mot de passe MySQL (laissez-le vide si vous ne l'avez pas défini)
$database = "quiz_app";     // Nom de la base de données que vous avez créée

// Récupérez les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero_etudiant = isset($_POST['numero_etudiant']) ? $_POST['numero_etudiant'] : null;

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}
// Récupérez les valeurs du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';

// Utilisez ces valeurs pour effectuer votre recherche dans la vue
$sqlRecherche = "SELECT * FROM vue_quiz_responses WHERE Nom = ? AND Prenom = ?";
$stmtRecherche = $conn->prepare($sqlRecherche);
$stmtRecherche->bind_param("ss", $nom, $prenom);
$stmtRecherche->execute();
$resultats = $stmtRecherche->get_result();

// Affichez les résultats de la recherche
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

// Fermez la connexion
$conn->close();
?>
