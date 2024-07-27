<?php
// Consommation d'une API
$url = "https://jsonplaceholder.typicode.com/posts/1";
$response = file_get_contents($url);
$data = json_decode($response, true);

echo "Titre: " . $data['title'] . "\n";
echo "Contenu: " . $data['body'] . "\n";

// Création d'une API simple
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = [
        'status' => 'success',
        'message' => 'Bienvenue à mon API!'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
