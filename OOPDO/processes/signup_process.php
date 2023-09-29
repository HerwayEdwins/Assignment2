<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Get user data from the form
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password

        // Prepare and execute the INSERT query
        $stmt = $pdo->prepare("INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$fullname, $username, $email, $password]);

        // Close the database connection
        $pdo = null;

        // Redirect to a success page or wherever you need
        header("Location: ../");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    // If the form was not submitted, redirect to the sign-up page
    header("Location: signup.html");
    exit();
}
?>
