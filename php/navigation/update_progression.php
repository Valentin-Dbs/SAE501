<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz_app";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Définissez la correspondance entre les pages et les indices de progression
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

// Vérifiez si l'utilisateur est authentifié
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: connexion.html');
    exit;
}

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez la prochaine page depuis le formulaire
    $nextPage = $_POST['next_page'];

    // Mettez à jour la progression dans la base de données
    $sqlUpdateProgression = "UPDATE users SET progression = ? WHERE nom = ?";
    $stmtUpdateProgression = $conn->prepare($sqlUpdateProgression);
    $stmtUpdateProgression->bind_param("is", $pageProgressionMap[$nextPage], $_SESSION['nom']);
    $stmtUpdateProgression->execute();

    // Mettez à jour la progression dans la session
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
    // Si la requête est de type GET (retour à la page précédente), assurez-vous de gérer correctement la progression
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Mettez à jour la progression dans la session en fonction de la page précédente
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
    // Redirigez vers la page d'accueil si la requête n'est ni POST ni GET
    header('Location: ../../index.html');
    exit;
}
?>
