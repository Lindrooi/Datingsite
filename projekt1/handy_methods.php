<?php 
//Allt möjligt viktigt som vi använder ofta, sessionshantering, form validation etc.

session_start();


//En funktion som tar bort whitespace, backlashes (escape char) och gör om < till html safe motsvarigheter
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //$safe_input = test_input($_REQUEST['unsafedata']);

  ?>