<?php
    // ESTABLISH A CONNECTION TO THE MYSQL DATABASE
    $mysqli = new mysqli('localhost', 'root', '', 'php');

    // CHECK FOR ERRORS
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MYSQL: " . $mysqli -> connect_error;
        exit();
    }

    // BEGIN THE SIGNIN PROCESS
    $name = $email = $password = '';

    // FOR ERROR HANDLING
    $name_err = $email_err = $password_err = '';

    // FORM SUBMIT AND ERROR CHECKING
    if (isset($_POST['submit'])) {
    // VALIDATE NAME
    if (empty($_POST['name'])) {
      $name_err = 'Name is required';
    }else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // VALIDATE EMAIL
    if (empty($_POST['email'])) {
      $email_err = 'Email is required';
    }else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    // VALIDATE PASSWORD
    if (empty($_POST['password'])) {
      $password_err = 'Password is required';
    }else {
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($name_err) && empty($email_err) && empty($password_err)) {
      // CHECK IF THE USER ALREADY EXISTS
      $result = $mysqli -> query("SELECT * FROM php_table WHERE email='$email' AND password='$password'");
      if ($result) {
        echo 'User already exists!';
      }else {
        // ADD DATA TO DATABASE
        $sql = "INSERT INTO php_table (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($mysqli, $sql)) {
          //  SUCCEEDED
          // USER IS AUTHENTICATED, CREATE A SESSION
          session_start();
          $_SESSION["name"] = $name;
          $_SESSION["email"] = $email;
          // REDIRECT TO THE HOMEPAGEgit 
          header('Location: ../website/');
          exit();
        }else {
          // ERROR
          echo 'Error: ' . mysqli_error($conn);
        }
      }
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
    <title>SIGNIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="signin-page">
                <div class="page-design">
                    <h2>Join Us</h2>
                    <form action="" method="POST">
                        <div class="txt_field">
                            <label for="">Username:</label>
                            <input type="text" name="name">
                        </div>
                        <div class="txt_field">
                            <label for="">E-mail:</label>
                            <input type="email" name="email">
                        </div>
                        <div class="txt_field">
                            <label for="">Password:</label>
                            <input type="password" name="password">
                        </div>
                         <input type="submit" name="submit" value="Create your account" id="create">
                        <p class="span-class">OR</p>
                        <br>
                        <input type="submit" class="google" name="google" value="Sign In with GOOGLE">
                </div>
        </div>
    </div>
</body>
</html>