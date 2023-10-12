<?php


//Räknar ut hur gammal man är då man registrerar sig på sidan
if (!empty($_GET["age"])) {

    $day = test_input($_REQUEST['age']);


    $day = explode('-', $day);

    $month = $day[1];
    $date = $day[2];
    $year = $day[0];


    $inputtime = mktime(00, 00, 00, $month, $date, $year);

    $diff =  time() - $inputtime;

    $years = $diff / 86400 / 365;
    $weeks = $diff / 86400 / 52 % 7;
    $days = $diff / 86400 % 7;
    $hour = $diff / 3600 % 24;
    $min = $diff / 60 % 60;
    $sec = $diff % 60;



    if($inputtime > time()) {
        $diff = $inputtime - time();

        print('You have not been born yet');
    } else {
         print('You are ' . round($years) . ' years ' . $weeks . ' weeks ' . $days . ' days of age');

    }

   
}

?>