<?php

// Inclusion du fichier de connexion à la base de données
include __DIR__ .'database_connection.php';

// Création de la base de données si elle n'existe pas déjà
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès ! ";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Modification de la table "users"
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(255) UNIQUE NOT NULL,
    token_expiration DATETIME,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    numero_etudiant VARCHAR(10),
    role VARCHAR(10) NOT NULL DEFAULT 'user',
    inscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    progression INT NOT NULL,
    INDEX (nom)
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' modifiée avec succès !";
} else {
    echo "Erreur lors de la modification de la table 'users' : " . $conn->error;
}

// Modification de la table "quiz_responses"
$sql = "CREATE TABLE IF NOT EXISTS quiz_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    quiz_id INT NOT NULL,
    question VARCHAR(255) NOT NULL,
    reponse_choisie VARCHAR(255) NOT NULL,
    est_correcte TINYINT(1) NOT NULL,
    temps_reponse INT NOT NULL,
    response_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE)
{
    echo "Table 'quiz_responses' modifiée avec succès !";
    } else {
    echo "Erreur lors de la modification de la table 'quiz_responses' : " . $conn->error;
    }
    
    // Création de la vue pour les réponses au quiz
    $sqlVue = "CREATE VIEW vue_quiz_responses AS
    SELECT
    u.id AS UserId,
    u.nom AS Nom,
    u.prenom AS Prenom,
    qr.question AS Question,
    qr.reponse_choisie AS ReponseChoisie,
    qr.est_correcte AS EstCorrecte,
    qr.temps_reponse AS TempsReponse
    FROM
    users u
    JOIN
    quiz_responses qr ON u.id = qr.user_id";
    
    if ($conn->query($sqlVue) === TRUE) {
    echo "Vue 'vue_quiz_responses' créée avec succès !";
    } else {
    echo "Erreur lors de la création de la vue 'vue_quiz_responses' : " . $conn->error;
    }
    
    // Ajout d'un administrateur (si nécessaire)
    $adminNom = "admin";
    $adminPrenom = "admin";
    $adminEmail = "admin@example.com";
    $adminNumeroEtudiant = "admin123";
    $adminRole = "admin";
    $adminToken = bin2hex(random_bytes(16)); // Générer un token aléatoire
    
    // Les administrateurs n'ont pas de date d'expiration pour leur token
    $sql = "INSERT INTO users (token, nom, prenom, email, numero_etudiant, role)
    VALUES ('$adminToken', '$adminNom', '$adminPrenom', '$adminEmail', '$adminNumeroEtudiant', '$adminRole')";
    
    if ($conn->query($sql) === TRUE) {
    echo " Utilisateur administrateur ajouté avec succès.";
    } else {
    echo " Erreur lors de l'ajout de l'utilisateur administrateur : " . $conn->error;
    }
    
    // Fermeture de la connexion à la base de données
    $conn->close();
    
    ?>