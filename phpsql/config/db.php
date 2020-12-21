<?php
            // Hide Sensitives with imports
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()) {
        // Connection failed
        echo 'failed to connect to mysql' . mysqli_connect_errno(); 
    }

?>