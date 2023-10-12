<?php 
//print images
$target_dir = "../pictures";
$photosArr = scandir($target_dir);
    //for loop som skriver ut bilderna
//print_r($photosArr);
    for ($i = 3; $i < count($photosArr); $i++) {
    print ("<img class='profilePictures' src='../pictures/".$photosArr[$i]."'>" );
}

?>