<?php 

// URL of API
$apiUrl = 'https://api.example.com/data';

$response = file_get_contents($apiUrl);

if ($response === false) {
    die('Error api failed');
}

$data = json_decode($response, true);

if ($data === null) {
    die('Error json transform.');
}

var_dump($data);

// by curl 


// URL de l'API que vous souhaitez appeler
$apiUrl = 'https://api.example.com/data';

// Initialisation cURL
$ch = curl_init($apiUrl);

//Request Configuration
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Exécution of request
$response = curl_exec($ch);

if ($response === false) {
    die('Error api  : ' . curl_error($ch));
}

// Close session cURL
curl_close($ch);

$data = json_decode($response, true);

if ($data === null) {
    die('Error JSON format.');
}

