<?php
    #substr()
    # Returns a portion of a string
    # so below returns 'ello'
    $output = substr('Hello', 1);
    // echo $output;

    #strlen();
    #returns the length of a string

    #strpos();
    # Finds the position of the first occurence of a substring.
    # strRpos() gets the LAST occurrence.
   $position = strpos('Hello, World', 'o');
//    echo $position;


   #trim() - Cuts whitespace;

   $text = "Hello World                 ";
   $trimmed = trim($text);
   // results in a str.length of 11
//    var_dump($trimmed);


   #strtoupper 
   # Makes string uppercase;

   $output2 = strtoupper('hello world');
//    echo $output2;

   # strtolower 
   # outputs everything in lower case.
//    echo strtolower($output2);

   # ucwords() 
   # capitalises every word.

//    echo ucwords($output);

   #str_replace()
   # Replace all occurences of a search string with a replacement

   $text = "Hello World";
   $output = str_replace('World', 'Everyone', $text);

//    echo $output;

   # is_string();
   # check if string, returns 1 or 0/false
   $val = '22';
   $output = is_string($val);

//    echo $output;
    /*   
        $values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];

        foreach($values as $value) {
            if(is_string($value)){
                echo "{$value} is a string <br>";
            }
        }
    */


    # gzcompress()
    # compress a string
    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nobis doloremque et vitae dignissimos, eum quisquam libero delectus, beatae quae hic laborum praesentium. Praesentium commodi illum in. Illo, distinctio corrupti.";
    $compressed = gzcompress($string);
    echo $compressed;
    // This compressed text would result in horrible looking software-gore, we can however
    // uncompress it to its original form using the gzuncompress() function
    $original = gzuncompress($compressed);
    echo $original;

?>