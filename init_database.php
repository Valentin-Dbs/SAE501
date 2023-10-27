<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz_app";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Création de la base de données s'elle n'existe pas déjà
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès !";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Sélection de la base de données
$conn->select_db($database);

// Création de la table "users"
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    numero_etudiant VARCHAR(10) NOT NULL,
    inscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' créée avec succès !";
} else {
    echo "Erreur lors de la création de la table 'users' : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>

