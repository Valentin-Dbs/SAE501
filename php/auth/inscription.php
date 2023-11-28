<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz_app";

// Récupérez les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero_etudiant = isset($_POST['numero_etudiant']) ? $_POST['numero_etudiant'] : null;

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Vérifiez si l'utilisateur existe
$sqlCheckUser = "SELECT progression FROM users WHERE nom = ?";
$stmtCheckUser = $conn->prepare($sqlCheckUser);
$stmtCheckUser->bind_param("s", $nom);
$stmtCheckUser->execute();
$stmtCheckUser->store_result();

// Si l'utilisateur existe, récupérez la progression et redirigez-le vers la bonne page
if ($stmtCheckUser->num_rows > 0) {
    $stmtCheckUser->bind_result($progression);
    $stmtCheckUser->fetch();
    
    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['progression'] = $progression;

    header('Location: ../../src/html/présentation' . $progression . '.php');
    exit;
} else {
    // Sinon, continuez avec l'insertion d'utilisateur
    $sqlInsertUser = "INSERT INTO users (nom, prenom, numero_etudiant, progression) VALUES (?, ?, ?, 0)";
    $stmtInsertUser = $conn->prepare($sqlInsertUser);

    // Associez les valeurs aux paramètres de la requête
    $stmtInsertUser->bind_param("sss", $nom, $prenom, $numero_etudiant);

    // Exécutez la requête et vérifiez le résultat
    if ($stmtInsertUser->execute()) {
        // Créez une variable de session pour l'authentification
        session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['progression'] = 0; // 0 correspond à la première page (présentation1.php)

        // Redirigez l'utilisateur vers la première page de la présentation
        header('Location: ../../src/html/présentation1.php'); 
        exit;
    } else {
        echo "Erreur lors de l'insertion : " . $stmtInsertUser->error;
    }
}

// Fermez la connexion
$conn->close();
?>
