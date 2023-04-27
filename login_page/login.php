<?php
    // ESTABLISH A CONNECTION TO THE MYSQL DATABASE
    $mysqli = new mysqli('localhost', 'root', '', 'php');

    // CHECK FOR ERRORS
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MYSQL: " . $mysqli -> connect_error;
        exit();
    }

    // PROCESS THE LOGIN FORM DATA
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // QUERRY THE DATABASE TO SEE IF THE USER EXISTS AND THE PASSWORD IS CORRECT
        $result = $mysqli -> query("SELECT * FROM php_table WHERE email='$email' AND password='$password'");

        // CHECK FOR ERRORS
        if (!$result) {
            echo "Error: " . $mysqli -> error;
            exit();
        }

        // CHECK IF THE QUERRY RETURNED ANY ROWS
        if ($result -> num_rows > 0) {
            // USER IS AUTHENTICATED, CREATE A SESSION
            session_start();
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;

            // REDIRECT TO THE APPROPRIATE PAGE
            header("Location: ../website/");
            exit();
        }else {
            // INVALID CREDENTIALS, THROW AN ERROR
            echo 'Invalid username or password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="login-page">
                <div class="page-design">
                    <h2>Login Here</h2>
                    <form action="" method="POST">
                    <div class="txt_field">
                        <label for="username">Username:</label>
                        <span></span>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="txt_field">
                        <label for="Email">Email:</label>
                        <span></span>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="txt_field">
                        <label for="Password">Password:</label>
                        <input type="password" name="password" id="password" required>
                    </div> 
                    <div class="pass">Forgot Password</div>
                    <input type="submit" name="Login" value="Log In" id="create">
                    <div class="signup_link ">
                        Not a member? <br><a href="signin.php"> Create account</a>
                    </div>
                    </form> 
                </div>
        </div>
    </div>        
</body>
</html>