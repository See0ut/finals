<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
          
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="login-container">
        <h2>Log in</h2>
        <form id="loginForm" action="signup.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>
            <input type="submit" value="Log in">
            <p>Don't have an account? <a href="signup.php" style="text-decoration: none;">Sign up</a></p>
        </form>
    </div>
</body>
</html>