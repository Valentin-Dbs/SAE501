<?php
$servername = "localhost";  // Serveur de la base de données (généralement "localhost" pour WAMP)
$username = "root";         // Nom d'utilisateur MySQL
$password = "";             // Mot de passe MySQL (laissez-le vide si vous ne l'avez pas défini)
$database = "quiz_app";     // Nom de la base de données que vous avez créée

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

// Vérifiez si l'utilisateur existe et est un administrateur
$sqlCheckAdmin = "SELECT role FROM users WHERE nom = ? AND role = 'admin'";
$stmtCheckAdmin = $conn->prepare($sqlCheckAdmin);
$stmtCheckAdmin->bind_param("s", $nom);
$stmtCheckAdmin->execute();
$stmtCheckAdmin->store_result();

// Si un administrateur avec le nom spécifié existe, redirigez vers la page d'administration
if ($stmtCheckAdmin->num_rows > 0) {
    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['role'] = 'admin';
    header('Location: ../../src/html/page_admin.php');
    exit;
}

// Sinon, continuez avec l'insertion d'utilisateur
$sql = "INSERT INTO users (nom, prenom, numero_etudiant) VALUES (?, ?, ?)";

// Utilisation d'une requête préparée pour éviter les injections SQL
$stmt = $conn->prepare($sql);

// Associez les valeurs aux paramètres de la requête
$stmt->bind_param("sss", $nom, $prenom, $numero_etudiant);

// Exécutez la requête
if ($stmt->execute()) {
    // Créez une variable de session pour l'authentification
    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    // Redirigez en fonction du rôle

        header('Location: ../../src/html/présentation1.php'); 
    exit;
    
} else {
    echo "Erreur : " . $conn->error;
}

// Fermez la connexion
$conn->close();
?>
