<?php
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('Y'); // Year in 4 digit format
    // echo date('l'); // Day of the week

    // echo date('d/m/Y')

    // echo date('h'); // Hour
    // echo date('i');// Min
    // echo date('s'); // Seconds
    // echo date('a'); // am or pm

    // Set the time zone
    // date_default_timezone_set('Germany/Berlin');
    // echo date('h:i:sa');
    // Unix Timestamps
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    // echo $timestamp;

    // echo date('d/m/Y', $timestamp)

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('+2 months'); 
    // Timestamp strings can be extremely vague if necessary
    // Which is a lot nicer than JS timestamping
    echo date('d/m/Y h:i:sa', $timestamp3);
?>