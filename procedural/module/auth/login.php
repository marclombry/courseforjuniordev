<?php
// Database configuration (customize with your own information)
$server = "localhost";
$username = "root";
$password = "";
$database = "formation";

try {
    // Connect to the database using PDO
    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    // Set PDO to throw exceptions on error
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Function to check login credentials
    function checkLogin($connection, $email, $password) {
        $query = "SELECT * FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return true; // Correct password
        }

        return false; // Incorrect email or password
    }

    // Example of using the checkLogin function
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (checkLogin($connection, $email, $password)) {
            echo "Login successful!"; // Redirect or display secure content here
        } else {
            echo "Incorrect email or password.";
        }
    }
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="email">email:</label>
        <input type="text" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Log In">
    </form>
</body>
</html>
