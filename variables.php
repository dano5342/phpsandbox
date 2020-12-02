<?php
    // returns a value print 'Hello World';
    // faster but no return value. echo 'Hello World'; 

    # Variables
    /*
        - Prefix with a $ Sign.
        - Var must start with letter or underscore
        - Only Letters, nums and underscores for var names
        - Case Sensitive: $OUTPUT is not $output

    */
    # Data Types
    /*
        - Strings
        - Integers: Numbers: Positive or Negative
        - Floats: numbers with a decimal point
        - Booleans: true/false
        - Arrays: Refer to notebook;  https://docs.google.com/presentation/d/1m6YN2Ex67zxnD-EcLvHKWxpwr0wUofc4J4YFl02TWy8/edit
        - Objects: Refer to notebook;
    */
    $output = 'Hello World';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2 . '!'; // FULLSTOP "." is used for concatenation
    $greeting2 = "$string1 $string2!"; // Double quotes work like template literals in JS
    
    // Escaping is done with a backslash "\" 
    // Or by using double quotes to contain the single quotes
    $string3 = 'They\'re here';

    $float1 = 4.4;
    $bool1 = true;
    echo $sum;
    echo $greeting;



    #Constants are also case sensitive, unless given the third argument below
    define('GREETING', 'Hello Everyone!', true); // This is how we define constants in PHP
    echo GREETING;
?>