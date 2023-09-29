<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Sacramento&display=swap" rel="stylesheet">
    <title>Your Website</title>
    
</head>
    <style>
        

        .container {
            text-align: center;
            padding: 20px;
        }

        .sign-up-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #F0FAFD3E;
            padding: 30px 50px 30px 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input-group input[type="submit"] {
            background-color: #2A2F4F;
            color: #FFFFFF;
            cursor: pointer;
        }

        .input-group input[type="submit"]:hover {
            background-color: #1E2140;
        }
    </style>
</head>
<header>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="sign_up.php">Sign Up</a>
        </nav>
        
    </header>
<body>
<h1>Sign Up</h1>
    <div class="container">
        
        <form action="processes/signup_process.php" method="POST" class="sign-up-form">
            <div class="input-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>
