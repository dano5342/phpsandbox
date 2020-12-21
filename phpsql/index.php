<?php
    require('config/config.php');
    require('config/db.php');


    // create a query
    $query = 'SELECT * FROM posts';

    $result = mysqli_query($conn, $query);

    //Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);


    mysqli_free_result($result);
    mysqli_close($conn);


?>
<?php include('inc/header.php'); ?>

    <div class="container">
    <h1>Posts</h1>

    <?php foreach($posts as $post) : ?>
        <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Written By: <?php echo $post['author']; ?></small>
            <br>
            <small>Created on: <?php echo $post['created_at']; ?></small>
            <p><?php echo $post['body']; ?></p>
            <button class="btn btn-default">
                <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read more</a>
            </button>
        </div>
    <?php endforeach; ?>
    </div>
<?php include('inc/footer.php'); ?>