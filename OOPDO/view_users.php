<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php 
    session_start();
    ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Sacramento&display=swap" rel="stylesheet">
        <title>Assignment 2</title>
   
    <title>View Users</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #2A2F4Fcc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="view_users.php">View Users</a>
            <a href="sign_up.php">Sign Up</a>
        </nav>
        
    </header>
    <h1>View Users</h1>
    <?php
    // Database configuration
    $host = 'localhost'; 
    $dbname = 'Assignment2'; 
    $username = 'root'; 
    $password = 'Skyblue.1767';

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set PDO to throw exceptions on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute a SELECT query to fetch all users
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();

        // Fetch results as associative array
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Check if there are users
        if (count($users) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Full Name</th><th>Username</th><th>Email</th></tr>";
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['fullname'] . "</td>";
                echo "<td>" . $user['username'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No users found.";
        }

        // Close the database connection
        $pdo = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
    ?>

    <br>
    
</body>
</html>
