<?php
    require('config/config.php');
    require('config/db.php');

    $id = mysqli_real_escape_string($conn, $_GET['id']);

  // create a query
    $query = 'SELECT * FROM posts WHERE id =' . $id;

    $result = mysqli_query($conn, $query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);
    mysqli_free_result($result);
    mysqli_close($conn);


?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <a href="<?php echo ROOT_URL ?>">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Written By: <?php echo $post['author']; ?></small>
        <br>
        <small>Created on: <?php echo $post['created_at']; ?></small>
        <p><?php echo $post['body']; ?></p>
    </div>
<?php include('inc/footer.php'); ?>