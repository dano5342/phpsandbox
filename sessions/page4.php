<?php
    session_start();

    // unset($_SESSION['name']); // This to remove ONE session item
    session_destroy(); // Use this one to completely remove everything from the session array
?>