<?php session_start(); //Stänger sessionen och loggar ut 
session_destroy(); 
header("location:index.php");  
exit;
?>