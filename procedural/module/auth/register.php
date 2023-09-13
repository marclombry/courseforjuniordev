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

    // Function to securely hash passwords
    function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // Function to register a new user
    function registerUser($conn, $email, $password) {
        $hashedPassword = hashPassword($password);
        $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $statement = $conn->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $hashedPassword);

        if ($statement->execute()) {
            return true; // Registration successful
        } else {
            return false; // Registration failed
        }
    }

    // Example of user registration
    if (isset($_POST['register'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (registerUser($conn, $email, $password)) {
            echo "Registration successful!"; // Redirect or display a success message
        } else {
            echo "Registration failed. Please try again.";
        }
    }
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
        <label for="email">email:</label>
        <input type="text" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
