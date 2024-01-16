<?php
// Inclusion du fichier de connexion à la base de données
include '../database/database_connection.php';

// Création d'un token unique pour l'utilisateur
$token = bin2hex(random_bytes(16));

// Définition de la date d'expiration du token pour 24 heures plus tard
$expirationDate = date('Y-m-d H:i:s', strtotime('+24 hours'));

// Insertion du nouvel utilisateur dans la base de données avec le token et sa date d'expiration
$sql = "INSERT INTO users (token, token_expiration) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $token, $expirationDate);

if ($stmt->execute()) {
    // Récupération de l'ID de l'utilisateur nouvellement créé
    $userId = $stmt->insert_id;

    // Démarrage de la session
    session_start();
    $_SESSION['user_id'] = $userId;
    $_SESSION['token'] = $token;
    $_SESSION['token_expiration'] = $expirationDate;
    $_SESSION['progression'] = $progression;

    // Redirection vers la première page de la présentation
    header('Location: ../../src/html/présentation1.php');
    exit;
} else {
    echo "Erreur lors de la création de l'utilisateur : " . $stmt->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
