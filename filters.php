
<?php
    // Check for the posted data
    
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found!';
    }else {
        echo "No Data";
    } 
    
    
    if(filter_has_var(INPUT_POST, 'data')){ 
        $email = $_POST['data'];

        // Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email .'<br>';        // Easier and cleaner way of email validation


        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is invalid';
        }
    }

    

    # Other validation AND sanitisation methods builtin to PHP
    // https://www.php.net/manual/en/filter.filters.validate.php
    // https://www.php.net/manual/en/filter.filters.sanitize.php
        #FILTER_VALIDATE_BOOLEAN    #FILTER_SANITIZE_EMAIL
        #FILTER_VALIDATE_EMAIL      #FILTER_SANITIZE_ENCODED
        #FILTER_VALIDATE_FLOAT      #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_VALIDATE_INT        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_VALIDATE_IP         #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_VALIDATE_REGEXP     #FILTER_SANITIZE_STRING
        #FILTER_VALIDATE_URL        #FILTER_SANITIZE_URL
    #
    
    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var . ' is a number';
    } else {
        echo $var . ' is not a number';
    }
    echo '<br>';
    $var2 = '1230987y123kjn123';
    var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));

    $scriptstring = '<script>alert(1)</script>';
    # echo $scriptstring; // This line goes through and executes on the browser
    // The line below is sanitized so it DOES NOT RUN on the browser
    echo filter_var($scriptstring, FILTER_SANITIZE_SPECIAL_CHARS);
    
    
    
    // This can be used to set up all form validation with minimal JS or regex
    
    $filters = [
        'data' => FILTER_VALIDATE_EMAIL, 
        'data2' => [
            'filter'=> FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 100,
            ],
        ],
    ];
    print_r(filter_input_array(INPUT_POST, $filters));
    


    $arr = array(
        "name" => "daniel ellis",
        "age" => 26,
        "email" => "dan@gmail.com"
    );
    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords",
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120,
            ),
        ),
        "email" => FILTER_VALIDATE_EMAIL,
    );
    print_r(filter_var_array($arr, $filters));

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">

    <button type="submit">Submit</button>
</form>