<?php

// Inclusion du fichier de connexion à la base de données
include 'database_connection.php';

// Création de la base de données si elle n'existe pas déjà
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès ! ";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Création de la table "users"
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    numero_etudiant VARCHAR(10) NOT NULL,
    role VARCHAR(10) NOT NULL DEFAULT 'user',
    inscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (nom)
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' créée avec succès !";
} else {
    echo "Erreur lors de la création de la table 'users' : " . $conn->error;
}

// Ajout d'un administrateur
$adminNom = "admin";
$adminPrenom = "admin";
$adminNumeroEtudiant = "admin123";
$adminRole = "admin";

$sql = "INSERT INTO users (nom, prenom, numero_etudiant, role) 
        VALUES ('$adminNom', '$adminPrenom', '$adminNumeroEtudiant', '$adminRole')";

if ($conn->query($sql) === TRUE) {
    echo " Utilisateur administrateur ajouté avec succès.";
} else {
    echo " Erreur lors de l'ajout de l'utilisateur administrateur : " . $conn->error;
}

// Création de la table "quiz_responses"
$sql = "CREATE TABLE IF NOT EXISTS quiz_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_nom VARCHAR(50) NOT NULL,
    quiz_id INT NOT NULL,
    question VARCHAR(255) NOT NULL,
    reponse_choisie VARCHAR(255) NOT NULL,
    est_correcte TINYINT(1) NOT NULL,
    temps_reponse INT NOT NULL,
    response_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Table 'quiz_responses' créée avec succès !";

    // Ajout de la clé étrangère
    $alterSql = "ALTER TABLE quiz_responses ADD CONSTRAINT FOREIGN KEY (user_nom) REFERENCES users(nom)";
    if ($conn->query($alterSql) === TRUE) {
        echo "Clé étrangère ajoutée avec succès !";
    } else {
        echo "Erreur lors de l'ajout de la clé étrangère : " . $conn->error;
    }

    // Création de la vue
    $sqlVue = "CREATE VIEW vue_quiz_responses AS
        SELECT
            u.nom AS Nom,
            u.prenom AS Prenom,
            qr.question AS Question,
            qr.reponse_choisie AS ReponseChoisie,
            qr.est_correcte AS EstCorrecte,
            qr.temps_reponse AS TempsReponse
        FROM
            users u
        JOIN
            quiz_responses qr ON u.nom = qr.user_nom";

    if ($conn->query($sqlVue) === TRUE) {
        echo "Vue 'vue_quiz_responses' créée avec succès !";
    } else {
        echo "Erreur lors de la création de la vue 'vue_quiz_responses' : " . $conn->error;
    }
    
} else {
    echo "Erreur lors de la création de la table 'quiz_responses' : " . $conn->error;
}

// Ajout de la colonne 'progression' à la table 'users'
$sqlAlterTable = "ALTER TABLE users ADD COLUMN progression INT NOT NULL";
if ($conn->query($sqlAlterTable) === TRUE) {
    echo " Colonne 'progression' ajoutée avec succès à la table 'users' !";
} else {
    echo " Erreur lors de l'ajout de la colonne 'progression' à la table 'users' : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();

?>