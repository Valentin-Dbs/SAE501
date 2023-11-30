<?php

// Démarrage de la session
session_start();

// Inclusion du fichier de vérification de connexion
include 'check_auth.php';

// Liste des pages autorisées dans l'ordre de progression
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

// Nom de la page actuelle
$currentPage = basename($_SERVER['PHP_SELF']);

// Indice de la page actuelle dans la liste des pages autorisées
$currentPageIndex = array_search($currentPage, $allowedPages);

// Indice de la page autorisée en fonction de la progression stockée en session
$allowedPageIndex = $_SESSION['progression'];

// Vérification si la page actuelle est autorisée
if (!in_array($currentPage, $allowedPages) || $currentPageIndex > $allowedPageIndex || $currentPageIndex < $allowedPageIndex) {

    // Redirection vers la dernière page autorisée avec un message
    echo "Vous n'êtes pas autorisé à accéder à cette page. Vous serez redirigé dans quelques instants.";
    $redirectPage = $allowedPages[$_SESSION['progression']]; 

    // Redirection JavaScript avec un délai de 2 secondes
    echo "<script>
        setTimeout(function() {
            window.location.href = '../../src/html/$redirectPage';
        }, 2000); // Délai en millisecondes
    </script>";
    exit;
}

?>
