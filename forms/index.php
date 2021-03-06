<?php

    // Message variables
    $msg = "";
    $msgClass = "";

    // Check for the submission
    if(filter_has_var(INPUT_POST, 'submit')) {
        // get form data
        $name = htmlspecialchars( $_POST['name']);
        $email = htmlspecialchars( $_POST['email']);
        $message = htmlspecialchars( $_POST['message']);
        
        // Check required fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            // check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Fail
                $msg = "Please ensure your email is valid";
                $msgClass="alert-danger";
            } else {
                // Pass
                echo 'PASSED';
                $toEmail = 'test@testmail.com';
                $subject = 'Contact Request From ' . $name;
                $body = "<h2> Contact Request</h2>
                    <h4>Name</h4><p>$name</p>
                    <h4>email</h4><p>$email</p>
                    <h4>message</h4><p>$message</p>
                ";
                // Headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset='utf-8'" . "\r\n";
                
                // Additional headers
                $headers .= "From: " . $name . "<".$email.">" . "\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = "Your message was sent!";
                    $msgClass = "alert-success";
                }else {
                    // Fail
                    $msg = "Your message was not sent!";
                    $msgClass = "alert-danger";
                }
            }
        } else {
            // Failed
            $msg = "Please fill in all fields.";
            $msgClass = "alert-danger";
        }
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="cosmo.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Contact Us</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if($msg != ""): ?>
            <div class="alert <?php echo $msgClass ?>"><?php echo $msg ?></div>

        <?php endif; ?>
        <form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
            </div>
            <div class="form-group">
                <label for="message"></label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>