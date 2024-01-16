<?php

// Inclusion du fichier check_auth.php
include __DIR__ . '/check_auth.php';


// Liste des pages autorisées dans l'ordre de progression
$allowedPages = [
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
];

// Nom de la page actuelle
$currentPage = basename($_SERVER['PHP_SELF']);

// Indice de la page actuelle dans la liste des pages autorisées
$currentPageIndex = array_search($currentPage, $allowedPages);

// Indice de la page autorisée en fonction de la progression stockée en session
$allowedPageIndex = $_SESSION['progression'];

// Si l'utilisateur essaie de refaire un quiz déjà complété
if ($currentPageIndex < $allowedPageIndex && strpos($currentPage, 'quiz') !== false) {
    echo "Vous avez déjà complété ce quiz.";
    // Redirection vers la prochaine étape
    $redirectPage = $allowedPages[$allowedPageIndex];
    header("Location: ../../src/html/$redirectPage");
    exit;
}

// Si l'utilisateur tente d'accéder à une page non autorisée
if ($currentPageIndex > $allowedPageIndex) {
    echo "Vous n'êtes pas autorisé à accéder à cette page. Vous serez redirigé vers la dernière page autorisée.";
    $redirectPage = $allowedPages[$allowedPageIndex];
    header("Location: ../../src/html/$redirectPage");
    exit;
    }
    
    // Si l'utilisateur essaie de revenir à une page de présentation passée
    if ($currentPageIndex < $allowedPageIndex && strpos($currentPage, 'présentation') !== false) {
    // L'utilisateur peut revenir en arrière pour les pages de présentation
    // La logique continue normalement pour permettre l'accès à la page
    }

?>
