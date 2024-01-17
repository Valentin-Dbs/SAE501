<?php
session_start();
include '../database/database_connection.php';

// Vérification si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // Requête pour trouver l'utilisateur dans la base de données
    $sql = "SELECT id, token, role FROM users WHERE nom = ? AND prenom = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nom, $prenom);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['role'] == 'admin') {
            // Utilisateur est un administrateur
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['token'] = $row['token'];
            $_SESSION['role'] = $row['role'];
            
            // Redirection vers la page admin
            header("Location: ../admin/page_admin.php");
            exit();
        } else {
            // Utilisateur n'est pas un administrateur
            $erreur = "Accès refusé : vous n'êtes pas administrateur.";
            header("Location: connexion_admin.php?erreur=".urlencode($erreur));
            exit();
        }
    } else {
        $erreur = "Utilisateur non trouvé.";
        header("Location: connexion_admin.php?erreur=".urlencode($erreur));
        exit();
    }

}

$stmt->close();
$conn->close();
?>
