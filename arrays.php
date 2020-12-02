<?php

    #Array - Variable that holds multiple values;
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    # Indexed
            // indices  0      1        2 
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(22, 55, 12);
    $cars = ['Toyota', 'Ford', 'Nissan'];
    $cars[3] = 'Chevy'; // IF we know the index to change
    $cars[] = "BMW"; // If we dont know the index, just add it to the end
    // echo $cars[4];
    /*echo count($cars); # counts the array (length)
    print_r($cars);*/ # Prints the array and its indexed K/V pairs
    // var_dump($cars); # Prints the var type, what EACH INDEX is, what type that index is, and the value 
    // Stored in the index. It can be used on all variable types


    # Associative Arrays
        // We set the #  index to the # name of these # people 
    $people = array("Brad" => 35,  "Jose" => 32, "William" => 37); // The values contained are ages
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // echo $people["Brad"] # Prints 35
    // echo $ids[22]; # Prints 22
    $people['Jill'] = 42; # Adds another Person index, with the value 42
    // echo($people['Jill']);

    #Multidimensional
        // Arrays within arrays, can be MANY dimensions deep. 
        // Example below is Name, Stock, Sold
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );
    echo $cars[1][0];
?>