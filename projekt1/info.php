
<?php

//info om servern och användaren
print("<small>Welcome to <b>" . $_SERVER['SERVER_NAME'] . "</b>: (" . $_SERVER['SERVER_ADDR'] . ")");
print("<br>");
print("<small>" . $_SERVER['SERVER_NAME'] . " runs " . $_SERVER['SERVER_SOFTWARE'] . "</small> </h1>");
print("<br>");

if (isset($_SESSION['Username']))
   print("User: <b>" . $_SESSION['Username'] . "</b>: (" . $_SERVER['REMOTE_ADDR'] . ")</small>");
print "<br>";

//Skriver ut klockan och veckodag.
$datum = date("M");
$veckodagar = array("måndag", "tisdag", "onsdag", "torsdag", "fredag", "lördag", "söndag");
$svenskaMonths = array("januari", "februari", "mars", "april", "maj", "juni", "juli", "augusti", "september", "oktober", "november", "december");
print("<p>Idag är det " . $veckodagar[date("N") - 1]  . " den " . date("d") . " " . $svenskaMonths[date("n")] . "." . " Vecka: " . date("W") . ".</p>");




?>