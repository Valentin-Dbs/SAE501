<?php 

// Démarrage ou reprise de la session
session_start();

// Inclusion du fichier de connexion à la base de données
include __DIR__ . '/../database/database_connection.php';

// Vérification si l'utilisateur est authentifié et si le token est défini
if (!isset($_SESSION['user_id']) || !isset($_SESSION['token'])) {
    header('Location: ../../');
    exit;
}

// Récupération de l'ID de l'utilisateur et du token depuis la session
$userId = $_SESSION['user_id'];
$token = $_SESSION['token'];

// Vérification de la validité du token
$sql = "SELECT token_expiration FROM users WHERE id = ? AND token = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $userId, $token);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
    // L'utilisateur n'existe pas ou le token ne correspond pas
    header('Location: ../../');
    exit;
}

$stmt->bind_result($tokenExpiration);
$stmt->fetch();

// Vérification si le token est expiré
if (new DateTime($tokenExpiration) < new DateTime()) {
    // Token expiré, redirection vers la page de connexion
    header('Location: ../../');
    exit;
}

?>
