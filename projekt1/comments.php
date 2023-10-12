<?php
//Varabler för användarnamn och meddelande
$yourname = $_POST['Username'];
$comment = $_POST['comment'];

//Ihopsättning av kommentaren
$data = $yourname . "<br>" . $comment . "<br><br>";

$myfile = fopen("comment.txt", "a"); 

//skriver kommentaren i filen
fwrite($myfile, $data); 
fclose($myfile);

//skriver ut innehållet på hemsidan
$myfile = fopen("comment.txt", "a+");
print(fread($myfile,filesize("comment.txt"))); 
fclose($myfile);
?> 



