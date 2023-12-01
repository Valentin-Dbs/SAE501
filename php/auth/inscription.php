<?php

// Inclusion du fichier de connexion à la base de données
include '../database/database_connection.php';

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero_etudiant = isset($_POST['numero_etudiant']) ? $_POST['numero_etudiant'] : null;

// Vérification si l'utilisateur existe
$sqlCheckUser = "SELECT progression, role FROM users WHERE nom = ?";
$stmtCheckUser = $conn->prepare($sqlCheckUser);
$stmtCheckUser->bind_param("s", $nom);
$stmtCheckUser->execute();
$stmtCheckUser->store_result();

// Si l'utilisateur existe, récupération de la progression et redirection de l'utilisateur vers la bonne page
if ($stmtCheckUser->num_rows > 0) {
    $stmtCheckUser->bind_result($progression, $role); // Now binding two variables
    $stmtCheckUser->fetch();

    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['progression'] = $progression;

    // Vérifier si l'utilisateur est un administrateur
    if ($role === 'admin') {
        header('Location: ../../src/html/page_admin.php');
        exit;
    } else {
        // Définir la correspondance entre les pages et les indices de progression
        $pageProgression = [
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

        $Page = $pageProgression[$progression];

        header('Location: ../../src/html/' . $Page . '');
        exit;
    }
} else {

    // Sinon insertion d'utilisateur
    $sqlInsertUser = "INSERT INTO users (nom, prenom, numero_etudiant, progression) VALUES (?, ?, ?, 0)";
    $stmtInsertUser = $conn->prepare($sqlInsertUser);

    // Association des valeurs aux paramètres de la requête
    $stmtInsertUser->bind_param("sss", $nom, $prenom, $numero_etudiant);

    // Exécution de la requête et vérification du résultat
    if ($stmtInsertUser->execute()) {

        // Création d'une variable de session pour l'authentification
        session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['progression'] = 0; // 0 correspond à la première page (présentation1.php)

        // Redirection de l'utilisateur vers la première page de la présentation
        header('Location: ../../src/html/présentation1.php'); 
        exit;
    } else {
        echo "Erreur lors de l'insertion : " . $stmtInsertUser->error;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

?>
