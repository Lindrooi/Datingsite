<?php session_start(); 


$user = $_SESSION['register'];
$pass = $_SESSION['pswrd'];

//skapar en array med användarnamn och lösenord
$logins = array();

array_push($logins[$user] = $pass);

print_r($logins);


/* Kollar om man har tryckt på logga in */
if (isset($_POST['Submit'])) {

    /* Kollar att namnet och lösenordet har matats in */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* kollar om användarnamnet och lösenordet har registrerats i arrayen */
    if (!empty($logins[$Username]) && $logins[$Username] == $Password) {
        /* Ger en sessionsvariabel ifall inmatningen är rätt  */
        $_SESSION['uname'] = $_SESSION['register'];
        $_SESSION['UserData']['Username'] = $logins[$Username];
        header("location:myProfile.php");
        exit;
    } else {
        /*Errormeddelande ifall inmatningen är fel */
        $msg = '<div id="loginErr">Invalid Login Details</div>';
    }
}
?>

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
            if (isset($_SESSION['uname'])) {
                include "./info.php";
            }

            ?>
        </div>

        <section class="signupform">

            <? print_r($logins); ?>

            <form action="" method="post" name="Login_Form" id="signup">

                <?php if (isset($msg)) {
                    print($msg);
                } ?>

                <h3>Login</h3>

                <input name="Username" type="text" class="Input" placeholder="Username">

                <input name="Password" type="password" placeholder="Password">

                <input name="Submit" type="submit" value="Login">


            </form>










        </section>

        <footer>
            <b>BB<b><sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>
</body>

</html>