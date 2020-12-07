<?php
    # Functions
    # A block of code that can be repeatedly called.

    /*
        CamelCase - myFunctionName(); ---- Same as javaScript;
        lower case - my_function(); ---- python
        Pascal Case - MyFunction(); ---- used for classes or Objects

        Frameworks that utilise PHP use different styles, code_igniter uses lower case,
        and Symfony they use CamelCase;
    */

    function simpleFunction() {
        #...Code;
        echo 'Hello World! <br>';
    }
    // Call the function
    // simpleFunction();

    # Arguments - Are passed into functions as parameters like in JS
    function sayHello($name = 'World!') {
        echo "Hello, $name! <br>"; // String literal?? 
    }
    // Calling this without an argument will error out UNLESS we add the default value like above
    // sayHello('Tom'); 


    // Returning a value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo addNumbers(1,2);


    # Using args by reference values
    $myNum = 10;
    function addFive($num) {
        $num += 5;
    }
    // Use the "&" to modify the actual reference value of the variable
    function addTen(&$num) { // By Reference is not used too much in practice.
        $num += 10;
    }

    addFive($myNum);
    echo "<br>Value: $myNum <br>"; // Still is 10 as the reference HAS NOT been changed
    addTen($myNum);
    echo "Value: $myNum"; // now is 20 as the reference HAS BEEN changed
?>
