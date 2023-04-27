<?php
    // MESSAGE VARIABLES
    $msg = '';
    $msg_class = '';

    // CHECK FOR THE SUBMIT
    if (filter_has_var(INPUT_POST, 'submit')) {
        // GET FORM DATA
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // CHECK REQUIRED FIELDS
        if (!empty($name) && !empty($email) && !empty($message)) {
            // PASSED
            // CHECK EMAIL
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // FAILED
                $msg = 'Please use a valid email';
                $msg_class = 'alert-danger';
            }else {
                // PASSED
                $to_email = 'rukundoprince951@gmail.com';  // YOU PUT YOUR HOSTING SERVER EMAIL
                $subject = 'Contact Request From ' . $name;
                $body = '<h2>CONTACT REQUEST</h2>
                        <h4>Name</h4><p>' . $name . '</p>
                        <h4>Email</h4><p>' . $email . '</p>
                        <h4>Message</h4><p>' . $message . '</p>
                ';
                // EMAIL HEADERS
                $headers = "MIME Version: 1.0" . "\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                // ADDITIONAL HEADERS
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                // CHECK FOR SUCCESS
                if (mail($to_email, $subject, $body, $headers)) {
                    // EMAIL SENT
                    $msg = 'Email sent successfully!';
                    $msg_class = 'alert-success';
                }else {
                    // FAILED
                    $msg = 'Email not sent!';
                    $msg_class = 'alert-danger';
                }
            }
        }else {
            // FAILED
            $msg = 'Please fill in all fields';
            $msg_class = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>CONTACT FORM</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="navbar-header">
                <a href="../website/" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != '') : ?>
            <div class="alert <?php echo $msg_class; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>