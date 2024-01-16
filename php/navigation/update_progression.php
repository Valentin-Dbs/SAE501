<?php

// Démarrage de la session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Inclusion du fichier de connexion à la base de données
include __DIR__ . '/../database/database_connection.php';

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
    'enregistrement.php' => 9,
];

// Inclusion du fichier de vérification de connexion
include __DIR__ . '/../auth/check_auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération de la prochaine page depuis le formulaire
    $nextPage = $_POST['next_page'];

    // Mise à jour de la progression dans la base de données
    if (isset($_SESSION['user_id'])) {
        $sqlUpdateProgression = "UPDATE users SET progression = ? WHERE id = ?";
        $stmtUpdateProgression = $conn->prepare($sqlUpdateProgression);
        $progression = $pageProgressionMap[$nextPage];
        $stmtUpdateProgression->bind_param("ii", $progression, $_SESSION['user_id']);
        $stmtUpdateProgression->execute();

        // Mise à jour de la progression dans la session
        $_SESSION['progression'] = $progression;
    }

    header('Location: ../../src/html/' . $nextPage);
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Gestion de la requête GET
    // ... Code pour gérer le retour à la page précédente ...
    $currentPage = basename($_SERVER['PHP_SELF']);
if (isset($_SESSION['user_id']) && isset($pageProgressionMap[$currentPage])) {
    // Mise à jour de la progression dans la session en fonction de la page précédente
    $_SESSION['progression'] = $pageProgressionMap[$currentPage];
}

header('Location: ../../src/html/' . $currentPage);
exit;
} else {
    // Redirection vers la page d'accueil si la requête n'est ni POST ni GET
    header('Location: ../../index.html');
    exit;
    }
    
    ?>
