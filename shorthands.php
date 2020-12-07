<?php
    $loggedIn = false;
    
    /*
    Traditional conditional looping
    if($loggedIn){
        echo "You're logged in";
    } else {
        echo "You're not logged in";
    }
    */
    // Ternary method
    // echo ($loggedIn) ? "You're logged in" : "You're not logged in";

    // WE can use ternaries for variable assignment here too:
    $isRegistered = ($loggedIn == true) ? true : false;
    // echo $isRegistered; 

    // We can also nest statements

    $age = 9;
    $score = 11;

    // echo "Your score is " . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
    $arr = [1,2,3,4,5]
?>

<!-- This first way of inline PHP is more repetitive than the other way below -->
<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome, user!</h1>
    <?php } else { ?>
        <h1>Welcome, Guest!</h1>
    <?php } ?>
</div>

<!-- This second way allows us to use the ternary within a PHP block
        And allow us to continue through without having to double back and close all the
        brackets and is known as shorthand syntax.
 -->
<div>
    <?php if($loggedIn): ?>
        <h1>Welcome, user!</h1>
    <?php else: ?>
        <h1>Welcome, Guest!</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>