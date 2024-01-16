<?php

// Inclusion du fichier de connexion à la base de données
include __DIR__ . '/../database/database_connection.php';

// Démarrage de la session
session_start();

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Vérification que l'utilisateur est connecté et que la variable de session user_id est définie
    if (isset($_SESSION['user_id']) && isset($_SESSION['token'])) {
        $user_id = $_SESSION['user_id'];
        $quiz_id = mysqli_real_escape_string($conn, $_POST['quiz_id']);
        $question = mysqli_real_escape_string($conn, $_POST['question']); // Échapper la question
        $reponse_choisie = mysqli_real_escape_string($conn, $_POST['reponse_choisie']); // Échapper la réponse choisie
        $est_correcte = (int) $_POST['est_correcte']; // Assurer que est_correcte est un entier
        $temps_reponse = (int) $_POST['temps_reponse']; // Assurer que temps_reponse est un entier    
        // Insertion des données dans la table quiz_responses
        $sql = "INSERT INTO quiz_responses (user_id, quiz_id, question, reponse_choisie, est_correcte, temps_reponse) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iissii", $user_id, $quiz_id, $question, $reponse_choisie, $est_correcte, $temps_reponse);
    
        if ($stmt->execute()) {
            echo "Les données ont été insérées avec succès dans la table quiz_responses.";
        } else {
            echo "Erreur lors de l'insertion des données : " . $stmt->error;
        }
    } else {
        echo "L'utilisateur n'est pas connecté.";
    }
    
}

// Fermeture de la connexion à la base de données
$conn->close();

?>