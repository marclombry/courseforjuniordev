<?php
// Database configuration (customize with your own information)
$server = "localhost";
$username = "root";
$password = "";
$database = "formation";

try {
    // Connect to the database using PDO
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to count the number of products
    $countQuery = "SELECT COUNT(*) AS totalProducts FROM products";
    $countStatement = $conn->query($countQuery);
    $totalProducts = $countStatement->fetch(PDO::FETCH_ASSOC)['totalProducts'];

    // Query to calculate statistics
    $statsQuery = "SELECT AVG(price) AS avgPrice, MIN(price) AS minPrice, MAX(price) AS maxPrice FROM products";
    $statsStatement = $conn->query($statsQuery);
    $statistics = $statsStatement->fetch(PDO::FETCH_ASSOC);

    // Display the results
    echo "Total Products: " . $totalProducts . "<br>";
    echo "Average Price: $" . number_format($statistics['avgPrice'], 2) . "<br>";
    echo "Minimum Price: $" . number_format($statistics['minPrice'], 2) . "<br>";
    echo "Maximum Price: $" . number_format($statistics['maxPrice'], 2) . "<br>";
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>
