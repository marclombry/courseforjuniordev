<?php
header('Content-Type: application/json');

// List of users for the example
$users = [
    [
        'id' => 1,
        'name' => 'Alice',
        'email' => 'alice@example.com'
    ],
    [
        'id' => 2,
        'name' => 'Bob',
        'email' => 'bob@example.com'
    ]
];

// Check if a user ID is passed as a parameter
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);
    foreach ($users as $user) {
        if ($user['id'] === $userId) {
            echo json_encode($user);
            exit;
        }
    }
    // User not found
    echo json_encode(['error' => 'User not found']);
} else {
    // Return the complete list of users
    echo json_encode($users);
}
