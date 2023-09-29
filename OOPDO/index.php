<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Sacramento&display=swap" rel="stylesheet">
    <title>Your Website</title>
    
</head>
<body>
    <header>
        <nav>
            <h1 style= "color:white; font-size: 2.6rem;">Home Page</h1>
           
            
        </nav>
        
    </header>

    <div class="container">
        <h1 class="welcome-message">Welcome to Our Website!</h1>
        <form action="view_users.php" method="POST" class="login-form">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <h3 style="font-size: 1.625rem;
        margin: 0px;
        position: relative;
        font-family: 'Montserrat', sans-serif;
        text-decoration:none;    
        line-height: 1;
        text-align:center;
        color:#11999E;">Don't have an account? <a style=text-decoration:none;  href="sign_up.php">Sign Up here</a></h3>
    </div>
</body>
</html>
