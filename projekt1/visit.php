<?php
$myfile = fopen("visits.txt", "a") or die("Unable to open file!");

$txt = $_SERVER['REMOTE_ADDR']. " " .date('d-m-y G:i:s') . "\n";

if(!isset ($_COOKIE['firstTimer'])) { //Kollar ifall användaren besöker sidan första gången och loggar IP.
fwrite($myfile, $txt);
fclose($myfile);
print ("<h3>Your visit has been logged :)</h3>");
}

?> 