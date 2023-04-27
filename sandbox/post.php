<?php
    // CONNECT TO DB
    $conn = mysqli_connect('localhost', 'root', '', 'php_blog');

    // CHECK FOR A DELETE REQUEST
    if (isset($_POST['delete'])) {
        // GET FORM DATA
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // INSERT THE DATA INTO DATABASE
        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if (mysqli_query($conn, $query)) {
            header('Location: mysqli_data.php');
        }else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }    

    // GET ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // CHECK CONNECTION
    if (mysqli_connect_errno()) {
        // CONNECTION FAILED
        echo 'Failed to connect to MYSQL ' . mysqli_connect_errno();
    }

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
    <title>BLOGS</title>
</head>
<body>
    <div class="m-5">
        <a href="/php/sandbox/mysqli_data.php" class="btn btn-primary">Back</a>
        <H1><?php echo $post['title']; ?></H1>
        <div class="bg-secondary mb-4 p-4">
            <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>
            <hr>
            <a href="/php/sandbox/edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pull-right" method="POST">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" value="Delete Post" name="delete" class="btn btn-danger mt-3">
            </form>
        </div>
    </div>
</body>
</html>