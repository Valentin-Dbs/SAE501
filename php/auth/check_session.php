<?php
session_start();

if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: connexion.html');
    exit;
}

// $pages = array(
//     "connexion.html",
//     "présentation1.php",
//     "présentation2.php",
//     "quiz1.php",
//     "présentation3.php",
//     "présentation4.php",
//     "quiz2.php",
//     "présentation5.php",
//     "présentation6.php",
//     "quiz3.php",
//     "page_certificat.php",
//     "accueil.html"
// );

// $maxRedirections = 5; 

// if (isset($_SESSION['progression']) && $_SESSION['progression'] < count($pages)) {
//     $redirectionPage = $pages[$_SESSION['progression']];
    
//     if ($_SESSION['redirectionCount'] < $maxRedirections) {
//         $_SESSION['redirectionCount']++;
//         header("Location: $redirectionPage");
//         exit;
//     } else {
//         // Redirigez vers une page d'erreur ou l'accueil
//         header("Location: accueil.html");
//         exit;
//     }
// }


?>
