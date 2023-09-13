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
    
    // Query to fetch all products
    $query = "SELECT * FROM products";
    $statement = $conn->query($query);
    
    // Fetch all products as an associative array
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $products = "";
    // Display the products
    if(!empty($results)) {
        $products .=  '<h2>Product List:</h2>';
        $products .=  '<ul>';
        foreach ($results as $product) {
            $products .=  '<li>';
            $products .=  'ID: ' . $product['id'] . '<br>';
            $products .=  'Name: ' . $product['name'] . '<br>';
            $products .=  'Price: $' . $product['price'] . '<br>';
            $products .=  'Image: ' . $product['image'] . '<br>';
            $products .=  '</li>';
        }
        $products .=  '</ul>';
    }
    
    return $products;
    
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}

?>
