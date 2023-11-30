<?php

include '../database/database_connection.php';

// Démarrez la session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assurez-vous que l'utilisateur est connecté et que la variable de session user_id est définie
// Assurez-vous que l'utilisateur est connecté et que la variable de session user_id est définie
if (isset($_SESSION['nom']) || isset($_SESSION['prenom'])) {
    $user_nom = $_SESSION['nom'];
    $quiz_id = mysqli_real_escape_string($conn, $_POST['quiz_id']);
    $question = mysqli_real_escape_string($conn, $_POST['question']); // Échapper la question
    $reponse_choisie = mysqli_real_escape_string($conn, $_POST['reponse_choisie']); // Échapper la réponse choisie
    $est_correcte = $_POST['est_correcte'];
    $temps_reponse = $_POST['temps_reponse'];

    // Insérez les données dans la table quiz_responses
    $sql = "INSERT INTO quiz_responses (user_nom, quiz_id, question, reponse_choisie, est_correcte, temps_reponse) 
            VALUES ('$user_nom', '$quiz_id', '$question', '$reponse_choisie', '$est_correcte', '$temps_reponse')";
    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été insérées avec succès dans la table quiz_responses.";
    } else {
        echo "Erreur lors de l'insertion des données : " . $conn->error;
    }
} else {
    echo "L'utilisateur n'est pas connecté.";
}

    
        echo $user_nom;
        echo $question;
        echo $reponse_choisie;
        echo $est_correcte;
        echo $temps_reponse;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
