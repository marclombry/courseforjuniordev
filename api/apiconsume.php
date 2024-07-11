<?php 
// Get all users
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/api/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$users = json_decode($response, true);

foreach ($users as $user) {
    echo "Name: " . $user['name'] . ", Email: " . $user['email'] . "<br>";
}