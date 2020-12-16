<?php

    $people = [
        "Steve",
        "John",
        "Kathy", 
        "Evan",
        "Anthony", 
        "Joshua",
        "Johanna", 
        "Rachel",
        "Mary",
        "Ernie",
        "Hal",
        "Malcolm",
        "Reece",
        "Richard",
        "Tom",
        "Michael",
        "Greg",
        "Mike",
        "Gill",
        "Gillian",
        "Stephan",
        "Molly",
        "Trang",
        "Derek",
        "Olivia"

    ];

    $q = $_REQUEST['q']; // Query

    $suggestion = "";

    if($q !== '') {
        $q = strtolower($q);
        $len = strlen($q);

        foreach($people as $person) {
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion = $person;

                } else {
                    $suggestion .= ", $person"; 
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>