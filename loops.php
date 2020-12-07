<?php
    # LOOPS - Execute code a set number of times;
    /*
        For
        While
        Do..While
        Foreach
    */

    # For loop
        // If you know how many times it will run
    # @params - init, condition, increment;
    
    for($i = 0; $i <= 10; $i++){
        echo $i; // Prints 012345678910
        echo "<br>";
    };

    #While Looping
    # @params - Only a condition
    $i = 0; // use this loop if we don't know the set condition
    while($i < 10) {
        echo $i;
        echo "<br>";
        $i++;
    };

    #Do..While
    #@params - condition

    $i = 0;
    do {
        echo $i;
        echo "<br>";
        $i++;
    }
    // All the action is done here, the Do..While loop runs AT LEAST ONCE;
    while($i < 100);
    


    #Foreach loop - Array Version
    
    $people = array('brad', 'jose', 'william');
    // Use the AS keyword to assign each value an individual iteration within the loop
    foreach($people as $person) {
        echo $person;
        echo "<br>";
    }
    

    $people = array('brad' => 'brad@gmail.com', 'jose' => 'jose@gmail.com', 'william' => 'will@gmail.com');
    // Use the AS keyword and then the => statement to assign a Key, then a value
    foreach($people as $person => $email) {
        echo $person . ': ' . $email; // Still prints the name/key
        echo "<br>";
    }
?>