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
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        // INSERT THE DATA INTO DATABASE
        $query = "UPDATE posts SET title = '$title', body = '$body', author = '$author' WHERE id = {$update_id}";

        if (mysqli_query($conn, $query)) {
            header('Location: mysqli_data.php');
        }else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    } 

   // GET ID
   $id = mysqli_real_escape_string($conn, $_GET['id']);

   // CREATE QUERRY
   $query = 'SELECT * FROM posts WHERE id = ' . $id;

   // GET RESULT
   $result = mysqli_query($conn, $query);

   // FETCH DATA
   $post = mysqli_fetch_assoc($result);
   // print_r($posts);

   // FREE RESULTS
   mysqli_free_result($result);

   // CLOSE CONNECTION
   mysqli_close($conn);
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
        <H1>EDIT POST</H1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" value="Edit Post" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
</body>
</html>