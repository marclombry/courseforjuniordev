<?php
$url = 'http://your-domain.com/users.php?id=1';
$response = file_get_contents($url);
$user = json_decode($response, true);

print_r($user);

/* CURL VERSION
$url = 'http://your-domain.com/users.php?id=1';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$user = json_decode($response, true);

print_r($user);
*/
?>
