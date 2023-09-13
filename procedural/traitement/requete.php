<?php 

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the JSON data from the request body
    $postData = file_get_contents("php://input");

    // Decode the JSON data into an associative array
    $data = json_decode($postData, true);

    // Check if JSON decoding was successful
    if ($data !== null) {
        // Process the data (e.g., save to a database, perform an action)
        $response = "Received data: " . print_r($data, true);

        // Send a JSON response back
        header("Content-Type: application/json");
        echo json_encode(["message" => $response]);
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(["error" => "Invalid JSON data."]);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["error" => "Only POST requests are allowed."]);
}


// Data to send as JSON
$dataToSend = [
    "name" => "John Doe",
    "email" => "john@example.com"
];

// Convert data to JSON format
$jsonData = json_encode($dataToSend);

// Set HTTP headers for the POST request
$options = [
    "http" => [
        "method" => "POST",
        "header" => "Content-Type: application/json",
        "content" => $jsonData
    ]
];

// Create a context for the POST request
$context = stream_context_create($options);

// Send the POST request to the PHP script
$response = file_get_contents("http://example.com/post_receiver.php", false, $context);

// Display the response from the server
echo $response;

