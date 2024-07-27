<?php
$dsn = 'mysql:host=localhost;dbname=testdb;charset=utf8mb4';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Exécuter une requête de base
    $stmt = $pdo->query('SELECT id, nom, email FROM utilisateurs');
    $utilisateurs = $stmt->fetchAll();

    foreach ($utilisateurs as $utilisateur) {
        echo "id: " . $utilisateur['id'] . " - Nom: " . $utilisateur['nom'] . " - Email: " . $utilisateur['email'] . "\n";
    }
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
