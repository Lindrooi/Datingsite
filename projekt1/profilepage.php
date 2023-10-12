<body>

    <div class="container">
        <!-- Max 800px bred container-->

        <?php include "./header.php"; ?>

            <article id="flexContainer">

                <h2>My Profile</h2>
                <h3>Image upload:</h3>

                <?php if (isset($_SESSION['UserData']["Username"])) { ?>
                    <form action="myProfile.php" method="post" enctype="multipart/form-data">
                        <p id="uploadText">Select image to upload:</p>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submitFile">
                    </form>
                <?php
                    include "./printFiles.php";
                    include "./upload.php";
                }
                ?>

            </article>
            <div class="separator"></div>

        <footer>
            Not by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>