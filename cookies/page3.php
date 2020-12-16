<?php
    $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];
    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));
    $user = unserialize($_COOKIE['user']);
    print_r($user);


    // recommended to use sessions over cookies as this is a safer way to store the data on a server 
    // rather than a browser that someone could be watching
?>