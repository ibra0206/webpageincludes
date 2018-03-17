<!DOCTYPE html>
<html lang="en">

<head>

<?php
include("includes/header.inc.php");

//set current time zone to EST 
date_default_timezone_set( "America/New_York");

//get time
$currentDateToDisplay = date ( "F j, Y");
$currentTimeToDisplay = date( "H:i:s");
$currentTime = localtime();

function isItDaytime($time){
    //define the bounds of a day
    define('DAY_START', 6);
    define('DAY_END', 18);
    
    //get the current hour from $time
    $currentHour = $time[2];
    
    //if the current hour is between 6 am and 6 pm return true
    if($currentHour >= DAY_START && $currentHour < DAY_END){
        $day = true;
    }else {
        $day = false;
    }
    return $day;
}
if (isItDaytime($currentTime)){
    echo "<body class='day'> \n";
} else{
    echo "<body class='night'> \n";
}
echo "\t <h1>Today is: $currentDateToDisplay </h1> \n";
?>


</head>
</html>