<?php
// Démarrer une session
session_start();

// Définir une variable de session
$_SESSION['utilisateur'] = 'Alice';

// Récupérer une variable de session
echo "Utilisateur en session: " . $_SESSION['utilisateur'] . "\n";

// Définir un cookie
setcookie("utilisateur", "Bob", time() + 3600);

// Récupérer un cookie
if (isset($_COOKIE['utilisateur'])) {
    echo "Utilisateur en cookie: " . $_COOKIE['utilisateur'] . "\n";
}
