<?php

// Démarrage de la session
session_start();

// Inclusion du fichier de connexion à la base de données
include '../database/database_connection.php';

// Définir la correspondance entre les pages et les indices de progression
$pageProgressionMap = [
    'présentation1.php' => 0,
    'présentation2.php' => 1,
    'quiz1.php' => 2,
    'présentation3.php' => 3,
    'quiz2.php' => 4,
    'présentation4.php' => 5,
    'présentation5.php' => 6,
    'quiz3.php' => 7,
    'présentation6.php' => 8,
    'certificat.php' => 9,
];

// Inclusion du fichier de vérification de connexion
include '../auth/check_auth.php';

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération de la prochaine page depuis le formulaire
    $nextPage = $_POST['next_page'];

    // Mise à jour de la progression dans la base de données
    $sqlUpdateProgression = "UPDATE users SET progression = ? WHERE nom = ?";
    $stmtUpdateProgression = $conn->prepare($sqlUpdateProgression);
    $stmtUpdateProgression->bind_param("is", $pageProgressionMap[$nextPage], $_SESSION['nom']);
    $stmtUpdateProgression->execute();

    // Mise à jour de la progression dans la session
    $_SESSION['progression'] = $pageProgressionMap[$nextPage];

                // Ajoutez un message de débogage pour voir la progression actuelle
                        // echo "Progression mise à jour : " . $_SESSION['progression'];

                        // // Redirection JavaScript vers la prochaine page avec un délai de 2 secondes
                        // echo "<script>
                        //         setTimeout(function() {
                        //             window.location.href = '../../src/html/$nextPage';
                        //         }, 2000); // Délai en millisecondes
                        //       </script>";

    header('Location: ../../src/html/' . $nextPage);
    exit;

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // Si la requête est de type GET (retour à la page précédente)
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Mise à jour de la progression dans la session en fonction de la page précédente
    $_SESSION['progression'] = $pageProgressionMap[$currentPage];

                // Ajoutez un message de débogage pour voir la progression actuelle
                        // echo "Progression mise à jour (Retour à la page précédente) : " . $_SESSION['progression'];

                        // // Redirection JavaScript vers la prochaine page avec un délai de 2 secondes
                        // echo "<script>
                        //     setTimeout(function() {
                        //         window.location.href = '../../src/html/$currentPage';
                        //     }, 2000); // Délai en millisecondes
                        //   </script>";

    header('Location: ../../src/html/' . $currentPage);
} else {

    // Redirection vers la page d'accueil si la requête n'est ni POST ni GET
    header('Location: ../../index.html');
    exit;
}

?>
