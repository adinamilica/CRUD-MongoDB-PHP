

<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload an article</title>
        <link rel="stylesheet" type="text/css" href="./css/upload_styling.css">
    </head>
    <body>

        <div class="main-container">

            <div class="nav-container">
                <ul>
                    
                    <li><a href="for_visitors.php">Collection</a></li>
                    <li><a href="upload.php"><b>Upload</b></a><li>
                        |
                    <li><a href="dashboard.php">Dashboard</a><li>
                    <li><button class="log-in-button"><a href="log_out_user.php" class="log-in-text">Logout</a></button></li>
                </ul>
            </div>

            <h1>Incarca un articol</h1>


            <div class="center-stuff-upload">


                <form method="post" action="save.php" enctype="multipart/form-data">

                    <input type="file" name="image">
                    <br><br>

                    <input type="text" name="title" placeholder="Introdu nume articol">
                    <br><br>

                    <input type="submit" name="upload" value="Incarca articol">

                </form>


            </div>
        </div>
    </body>
</html>