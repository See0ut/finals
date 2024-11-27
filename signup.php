<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-form {
            text-align: left; 
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            font-family: Arial, sans-serif;
        }
        
        .signup-form input {
            display: block;
            margin: 20px 0;
            width: 93%; 
            height: 35px; 
            padding: 5px 10px; 
            font-size: 1em; 
            border-radius: 10px; 
            border: 1px solid #ccc; 
        }
        
        .signup-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 14px 20px; 
            cursor: pointer;
            width: 100%; 
            border-radius: 25px; 
        }
        .signup-form label {
            display: block;
            margin: 20px 0; 
            color: black; 
            line-height: 1.5em; 
            font-size: 0.9em; 
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <h2 style="color: black; text-align: center;">Sign Up</h2>
        <form action="login.php" method="post">
            <label for="username">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </label>
            <label for="email">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </label>
            <label for="password">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </label>
            <label for="contact">
                <input type="tel" id="contact" name="contact" placeholder="Phone Number" pattern="[0-9]{11}" required>
            </label>
            <button type="submit">Sign Up</button>
        </form>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myshop"; // Replace with your actual database name

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $contact = $_POST['contact'];

            $sql = "INSERT INTO users (username, email, password, contact) VALUES ('$username', '$email', '$password', '$contact')";

            if ($conn->query($sql) === TRUE) {
                echo "Account created successfully. <a href='login.php'>Login</a>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>