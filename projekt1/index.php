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
            include "./visit.php";
            include "./cookie.php";
            include "./info.php";
            ?>

        </div>



        <div id="flexContainer">
            <?php if (!isset($_SESSION['UserData']['Username'])) { ?>


                <section id="signupform">
                    <?php include "./signupinfo.php"; ?>
                </section>

            <?php } else { ?>


                <h1>TOP RATED USERS</h1>

                <img class="profilePictures" src="../media/barbieGirl.jpg" alt="picture of barbie princess">

                <div id="commentsection"><?php include "./comments.php"; ?></div>

                <h3> Add a comment here </h3>

                <form action="index.php" method="post">

                    <textarea name="comment" id="comment" cols="60" rows="1"></textarea>
                    <input type="submit" value="submit">
                </form>


        </div>
        <br> <!-- footern trycks ned -->
        <br>
        <br>
    <?php } ?>







    <footer>
        <b>BB<b><sup>&#169;</sup>

    </footer>

    </div>
</body>

</html>