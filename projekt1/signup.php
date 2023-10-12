<?php include "./handy_methods.php" ?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBDating</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>


    <div class="container">


        <?php include "./header.php" ?>

        <div id="info">
            <?php
            include "./info.php";
            ?>
        </div>

        <section>
        <div id="signupinfo">

            <?php

            $firstName = test_input($_GET['firstname']);
            $lastName = test_input($_GET['lastname']);
            $email = test_input($_GET['email']);
            $age = test_input($_GET['age']);
            ?>
            <div id="sign-up-confirmation">

            <?php
            print('Name: ' . $firstName . " " . $lastName);
            print('<br>');
            print('Email ' . $email);
            print('<br>');
            print('Date of birth: ' . $age); 
            print('<br>');
            include "./datecalc.php";
            print('<br>');
            print('You will recieve an automated email with password details.');
            print('<br>');
            print("You will be redirected to the sign in-page in 5 sec <br>");
            $_SESSION['register'] = test_input($_GET['firstname']);
            header("refresh:5; url=login.php");
            
            ?>
            </div>

            <?php
            //lagar ett random lösenord
            function password_generate($chars)
            {
                $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                return substr(str_shuffle($data), 0, $chars);
            }
             
            
            $password = password_generate(7) ; 
            $_SESSION['pswrd'] = $password;
            $msg = "Welcome to BBDating, your username is: " . $_SESSION['register'] . ", " . "your password is: " .$password;
            
            mail($email, "BBDating login", $msg);
            ?>


        </div>
</section>
        <footer>
            <b>BB<b><sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>