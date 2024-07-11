<?php 
/*
 * REST (Representational State Transfer) is an architectural style for designing networked applications.
 * It emphasizes a stateless client-server communication where resources are uniquely identified by URIs.
 *
 * Key principles of REST:
 *
 * 1. Resource-Based: Treats every piece of information (or functionality) as a resource that can be accessed and manipulated.
 *
 * 2. Uniform Interface: Resources are manipulated through a uniform interface consisting of well-defined operations (HTTP methods):
 *    - GET: Retrieve a resource.
 *    - POST: Create a new resource.
 *    - PUT: Update an existing resource.
 *    - DELETE: Delete a resource.
 *
 * 3. Stateless: Each client request to the server must contain all necessary information to understand the request. The server does not store client context between requests, improving scalability and reliability.
 *
 * 4. Client-Server Architecture: Separates concerns between the client (presentation/UI) and server (data storage and business logic), allowing them to evolve independently.
 *
 * 5. Cacheable: Responses from the server can be labeled as cacheable or non-cacheable to improve performance by reducing network latency for repeated requests.
 *
 * RESTful API (or RESTful Web Service) refers to an API that adheres to REST principles:
 *
 * - Resource Identification: Resources are identified using URIs (Uniform Resource Identifiers).
 * - Manipulation of Resources: Resources are manipulated through representations (typically JSON or XML) and standard HTTP methods.
 * - Hypermedia as the Engine of Application State (HATEOAS): RESTful APIs should include hyperlinks to related resources to enable navigation through the API.
 *
 * Example: Implementing a RESTful API in PHP involves defining endpoints that represent resources, using HTTP methods appropriately (GET, POST, PUT, DELETE), and returning responses in a consistent format (e.g., JSON).
 *
 * By following RESTful principles, developers can create scalable, maintainable, and interoperable APIs that support a wide range of clients and use cases.
 */
// Example of a simple RESTful API in PHP

// Simulated database array
$books = [
    ['id' => 1, 'title' => '1984', 'author' => 'George Orwell'],
    ['id' => 2, 'title' => 'Brave New World', 'author' => 'Aldous Huxley'],
    ['id' => 3, 'title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury'],
];

// Handle GET requests (retrieve data)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if an ID parameter is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Find a book by ID
        $book = array_filter($books, function ($b) use ($id) {
            return $b['id'] == $id;
        });
        // Return JSON response if book found, otherwise return 404
        if (!empty($book)) {
            echo json_encode(array_values($book)[0]);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Book not found']);
        }
    } else {
        // Return all books as JSON response
        echo json_encode($books);
    }
}

// Handle POST requests (create new data)
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assume JSON payload in request body
    $input = json_decode(file_get_contents('php://input'), true);
    // Validate input fields
    if (isset($input['title']) && isset($input['author'])) {
        // Generate new ID (assuming auto-increment in real application)
        $newId = max(array_column($books, 'id')) + 1;
        // Create new book object
        $newBook = ['id' => $newId, 'title' => $input['title'], 'author' => $input['author']];
        // Add new book to database
        $books[] = $newBook;
        // Return newly created book as JSON response
        http_response_code(201);
        echo json_encode($newBook);
    } else {
        // Return 400 Bad Request if input fields are missing
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
    }
}

// Handle PUT requests (update existing data)
elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Assume JSON payload in request body
    $input = json_decode(file_get_contents('php://input'), true);
    // Validate input fields
    if (isset($input['id']) && isset($input['title']) && isset($input['author'])) {
        $id = $input['id'];
        // Find index of book in database array
        $index = array_search($id, array_column($books, 'id'));
        // Update book if found, otherwise return 404
        if ($index !== false) {
            $books[$index]['title'] = $input['title'];
            $books[$index]['author'] = $input['author'];
            // Return updated book as JSON response
            echo json_encode($books[$index]);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Book not found']);
        }
    } else {
        // Return 400 Bad Request if input fields are missing
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
    }
}

// Handle DELETE requests (delete existing data)
elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Check if an ID parameter is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Find index of book in database array
        $index = array_search($id, array_column($books, 'id'));
        // Delete book if found, otherwise return 404
        if ($index !== false) {
            // Remove book from array
            $deletedBook = array_splice($books, $index, 1);
            // Return deleted book as JSON response
            echo json_encode($deletedBook[0]);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Book not found']);
        }
    } else {
        // Return 400 Bad Request if ID parameter is missing
        http_response_code(400);
        echo json_encode(['error' => 'Missing book ID']);
    }
}
