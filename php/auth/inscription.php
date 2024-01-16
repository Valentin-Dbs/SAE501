<?php

// Inclusion du fichier de vérification de session
include 'check_session.php';

// Inclusion du fichier de connexion à la base de données
include '../database/database_connection.php';

// Récupération des données du formulaire
$nom = $_POST['nom'] ?? null;
$prenom = $_POST['prenom'] ?? null;
$email = $_POST['email'] ?? null; // Ajout du champ email
$numero_etudiant = $_POST['numero_etudiant'] ?? null;

// Vérification si des données ont été soumises
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mise à jour des informations de l'utilisateur
    $sqlUpdateUser = "UPDATE users SET nom = ?, prenom = ?, email = ?, numero_etudiant = ? WHERE id = ?";
    $stmtUpdateUser = $conn->prepare($sqlUpdateUser);
    $stmtUpdateUser->bind_param("ssssi", $nom, $prenom, $email, $numero_etudiant, $_SESSION['user_id']);

    if ($stmtUpdateUser->execute()) {

        
   // Redirection vers la page correspondant à la progression de l'utilisateur
        $redirectPage = $pageProgression[$_SESSION['progression']];
        header('Location: ../../src/html/confirmation.php' . $redirectPage);
        exit;
    } else {
        echo "Erreur lors de la mise à jour : " . $stmtUpdateUser->error;
    }
}

$conn->close();

?>
