<?php

    $path = "/dir1/myfile.php";
    $file = 'file1.txt';
    # For Ref
    // Return filename
    echo basename($path);

    // Return filename w/o extension
    echo basename($path, '.php');

    // Return the directory name frm the path
    echo dirname($path);

    // Check for existence of file OR folder
    echo file_exists($file); // Outputs 1 or nothing (t/f);

    // Gets the abs path
    echo realpath($file);

    // Checks to see ONLY if file
    echo is_file($file); // Outputs 1 or nothing

    // check if writeable
    echo is_writable($file); // Outputs 1 or false for read only

    // check if readable
    echo is_readable($file); // Outputs 1 or false for unreadable

    // Check size of file
    echo filesize($file);



    # CRUD from PHP
    // Create a folder
    mkdir('testing');

    // Delete a dir (if its empty)
    rmdir('testing');

    // Copy a new file from an existing one
    echo copy('file1.txt', 'file2.txt');

    // rename a file
    rename('file2.txt', 'myfile.txt');

    // Delete a file
    unlink('myfile.txt');

    // write from file to string
    echo file_get_contents($file); // puts whatever is in the file on the browser

    // write string TO file
    file_put_contents($file, 'Goodbye World'); // Replaces ALL of whats in the folder

    // Append to file
    $current = file_get_contents($file);
    $current .= "\r\nGoodbye World";
    file_put_contents($file, $current);



    // Open a file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data; 

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $text = 'John Doe';
    fwrite($handle, $text);
    fclose($handle);