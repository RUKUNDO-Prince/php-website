<?php
    // CONNECT TO DB
    $conn = mysqli_connect('localhost', 'root', '', 'php_blog');

    // CHECK CONNECTION
    if (mysqli_connect_errno()) {
        // CONNECTION FAILED
        echo 'Failed to connect to MYSQL ' . mysqli_connect_errno();
    }

    // CREATE QUERRY
    $query = 'SELECT * FROM posts ORDER BY id DESC';

    // GET RESULT
    $result = mysqli_query($conn, $query);

    // FETCH DATA
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <H1>POSTS</H1>
    <a href="add_post.php" class="btn btn-primary mb-3">Add a post</a>
    <?php foreach($posts as $post): ?>
        <div class="bg-secondary mb-4 p-4">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $post['id']; ?>">Read More!</a>
        </div>
    <?php endforeach; ?>
</body>
</html>