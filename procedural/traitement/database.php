<?php
// Database connection information
$host = 'localhost'; // Database server address
$dbname = 'formation'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a PDO instance to establish the connection
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception for error handling
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
