<?php
// Database configuration
$host = 'localhost'; // Change to your database host if needed
$dbname = 'Assignment2'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = 'Skyblue.1767'; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute a sample query
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();

    // Fetch results as associative array
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the results
    foreach ($users as $user) {
        echo "ID: " . $user['id'] . "<br>";
        echo "Full Name: " . $user['fullname'] . "<br>";
        echo "Username: " . $user['username'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
        echo "<hr>";
    }

    // Close the database connection
    $pdo = null;
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
