<?php

    //manually set a cookie
    setcookie('username', 'frank', time() + (86400 * 30));
    // delete a cookie
    // setcookie('username', 'frank', time() - 3600);

    // check for cookies
    if(count($_COOKIE) > 0) {
        echo "There are " . count($_COOKIE). " cookies saved <br>";
    }else {
        echo "There are no cookies saved <br>";
    }



    if(isset($_COOKIE['username'])){
        echo "User " . $_COOKIE['username'] . " is set <br>";
    } else {
        "User is not set";
    }


?>