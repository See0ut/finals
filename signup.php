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
            text-align: left; /* Align text to the left */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            font-family: Arial, sans-serif;
        }
        .signup-form input {
            display: block;
            margin: 10px 0; /* Adjust margin to align inputs */
            width: 100%; /* Make inputs full width */
            height: 25px; /* Adjust the height of the input fields */
            padding: 5px; /* Add padding for better spacing */
            font-size: 1em; /* Adjust font size for better readability */
        }
        .signup-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 20px; /* Make the button round */
            width: 100%; /* Make button full width */
        }
        .signup-form label {
            display: block;
            margin: 10px 0;
            color: black; /* Ensure the labels are visible on the white background */
            line-height: 1.5em; /* Adjust the height of the label */
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <h2 style="color: black; text-align: center;">Sign Up</h2>
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Re-enter Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>