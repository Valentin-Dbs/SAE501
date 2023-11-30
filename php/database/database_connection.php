<?php
include 'database_config.php';

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Sélection de la base de données
$conn->select_db($database);
?>
