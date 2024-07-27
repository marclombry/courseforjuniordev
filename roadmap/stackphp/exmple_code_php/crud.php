<?php
$dsn = 'mysql:host=localhost;dbname=testdb;charset=utf8mb4';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Créer (INSERT)
    $sql = "INSERT INTO utilisateurs (nom, email) VALUES (:nom, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => 'John Doe', 'email' => 'john@example.com']);
    echo "Nouvel enregistrement créé avec succès\n";

    // Lire (SELECT)
    $stmt = $pdo->query('SELECT id, nom, email FROM utilisateurs');
    $utilisateurs = $stmt->fetchAll();

    foreach ($utilisateurs as $utilisateur) {
        echo "id: " . $utilisateur['id'] . " - Nom: " . $utilisateur['nom'] . " - Email: " . $utilisateur['email'] . "\n";
    }

    // Mettre à jour (UPDATE)
    $sql = "UPDATE utilisateurs SET email = :email WHERE nom = :nom";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => 'john.doe@example.com', 'nom' => 'John Doe']);
    echo "Enregistrement mis à jour avec succès\n";

    // Supprimer (DELETE)
    $sql = "DELETE FROM utilisateurs WHERE nom = :nom";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => 'John Doe']);
    echo "Enregistrement supprimé avec succès\n";
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
