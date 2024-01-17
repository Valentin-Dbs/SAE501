<?php

include __DIR__ . '/../database/database_connection.php';
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: ../../src/html/connexion_admin.php');
    exit();
}
?>
