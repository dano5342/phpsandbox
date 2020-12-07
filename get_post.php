
<?php 
    // Use isset to check if the data is set to avoid errors appearing in the HTML
    if(isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);
        // print_r($_GET);
        echo $name;
    }
    // Security issues when dealing with forms is still an issue (the same as in Python
    // And in JS). CSRF and XSS attacks are still common place. 
    // The insertion of Script tags is possible unless we're careful, which inserts troublesome
    // scripts directly into the HTML
    // Use HTML entities to help to defend against these attacks as this changes the brackets
    // into harmlessly text injected characters.


    // If we dont want data available lets use POST instead.
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        print_r($_POST);
        echo $name;
    }
    // This is an alternate way of doing it, best to use GET and POST though
    // if(isset($_REQUEST['name'])) {
    //     $name = htmlentities($_REQUEST['name']);
    //     print_r($_REQUEST);
    //     echo $name;
    // }
        // Query String is handy to get what is in the URL
    // echo $_SERVER['QUERY_STRING'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>

<body>
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=steve">Steve</a>
        </li>
    </ul>
</body>

</html>