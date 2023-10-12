<?php
session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="../style.css">

</head>

<div id="profileContainer">
<?php 
 include "./profilepage.php"

?>
 <br> <!-- footern trycks ned -->
        <br>
        <br>
</div>

</html>