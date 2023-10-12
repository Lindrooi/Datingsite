<header>
    <!-- Logo och meny i headern -->
    <img src="../media/BBLogo.svg" alt="Website logo" />
    <div id="logo">BBDating</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>

        <?php if (!isset($_SESSION['UserData']['Username'])) {
                print('<li><a href="./login.php">Sign in!</a></li>');
                print('<li><a href="./index.php">Register!</a></li>');
            } else {
                print("<li><a href='./myProfile.php'>My Profile</a></li>");
                print("<li><a href='./logout.php'>Logout</a></li>");
            }
            ?>
            
            <li><a href="./index.php">Projekt 1</a></li>
            <li><a href="../projekt2/">Projekt 2</a></li>
            <li><a href="./rapport.php">Rapport</a></li>
            
            

        </ul>
    </nav>
</header>