<?php

    #Conditionals
    /*
        == loose equality (tests value only)
        === deep equality (data type too)
        >
        <
        >=
        <=
        !=
        !==
    */
    /* 
    $num = 4; 
    if($num == 5) {
        echo '5 passed';

    } elseif($num == 6) {
        echo '6 passed';
    } else {
        echo 'Did not pass';
    }
    */

    $num = 5;
    // if($num > 4) {
    //     if($num < 10) {
    //         echo "$num passed";
    //     }
    // }


    /* 
        LOGICAL OERATORS
        and     &&
        or      ||
        xor     1 true, but not BOTH
    */

    if($num > 4 XOR $num < 10) {
        echo "$num passed";
    }

    # SWITCH
    $favColor = "yellow";

    switch($favColor) {
        case 'red':
            echo "Your favourite color is Red";
        break;
        case 'blue':
            echo "Your favourite color is Blue";
        break;
        case 'green':
            echo "Your favourite color is green";
        break;
        default:
            echo "Your favourite color is something else";
    }

?>