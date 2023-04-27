<?php
    // CONNECT TO DB
    $conn = mysqli_connect('localhost', 'root', '', 'php_blog');

    // CHECK CONNECTION
    if (mysqli_connect_errno()) {
        // CONNECTION FAILED
        echo 'Failed to connect to MYSQL ' . mysqli_connect_errno();
    }

    // CHECK FOR A SUBMIT
   if (isset($_POST['submit'])) {
        // GET FORM DATA
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        // INSERT THE DATA INTO DATABASE
        $query = "INSERT INTO posts(title, body, author) VALUES ('$title', '$body', '$author')";

        if (mysqli_query($conn, $query)) {
            header('Location: mysqli_data.php');
        }else {
            echo 'ERROR: ' . mysqli_error($conn);
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
    <title> BLOGS</title>
</head>
<body>
    <div class="container">
        <H1>ADD A POST</H1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            
            <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
</body>
</html>