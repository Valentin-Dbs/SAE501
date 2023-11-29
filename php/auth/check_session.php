<?php
session_start();

if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: connexion.html');
    exit;
}

$allowedPages = array(
    'présentation1.php',
    'présentation2.php',
    'quiz1.php',
    'présentation3.php',
    'quiz2.php',
    'présentation4.php',
    'présentation5.php',
    'quiz3.php',
    'présentation6.php',
    'certificat.php'
);

$currentPage = basename($_SERVER['PHP_SELF']);

// Vérifie si la page actuelle est autorisée en fonction de la progression
$currentPageIndex = array_search($currentPage, $allowedPages);
$allowedPageIndex = $_SESSION['progression'];

if (!in_array($currentPage, $allowedPages) || $currentPageIndex > $allowedPageIndex || $currentPageIndex < $allowedPageIndex) {
    // Redirigez l'utilisateur vers la dernière page autorisée
    $redirectPage = $allowedPages[$_SESSION['progression']];
    // Affiche un message avant de rediriger
    
    echo "Vous n'êtes pas autorisé à accéder à cette page. Vous serez redirigé dans quelques instants.";

    // Redirection JavaScript avec un délai de 2 secondes
    echo "<script>
        setTimeout(function() {
            window.location.href = '../../src/html/$redirectPage';
        }, 2000); // Délai en millisecondes
    </script>";
    exit;
}
?>
