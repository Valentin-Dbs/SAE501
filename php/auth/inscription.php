<?php
$servername = "localhost";  // Serveur de la base de données (généralement "localhost" pour WAMP)
$username = "root";         // Nom d'utilisateur MySQL
$password = "";             // Mot de passe MySQL (laissez-le vide si vous ne l'avez pas défini)
$database = "quiz_app";     // Nom de la base de données que vous avez créée

// Vérifiez si le formulaire a été soumis

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

    // Préparez la requête SQL d'insertion
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
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $conn->error;
    }
    header('Location: ../../src/html/présentation1.php');
    exit;    
    // Fermez la connexion
    $conn->close();

?>
