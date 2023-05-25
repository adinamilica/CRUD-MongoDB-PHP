
<html>
    <head>
        <meta charset="UTF-8">
        <title> Collection </title>
        <link rel="stylesheet" type="text/css" href="./css/view-styling.css">
    </head>
    <body>
        <div class="main-container">

            <div class="nav-container">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="for_visitors.php">Collection</a></li>
                    <li><a href="upload.php">Upload</a><li>
                        |
                        <li><a href="dashboard.php">Dashboard</a><li>
                    <li><button class="log-in-button"><a href="log_out_user.php" class="log-in-text">Logout</a></button></li>
                </ul>
            </div>

            <a href="for_visitors.php"> < Back</a> 


            <div style="margin:auto; padding:20px;">

                <?php
                require_once 'connection.php';
                $id = new \MongoDB\BSON\ObjectId($_GET['id']);
                $filter = ['_id' => $id];
                $query = new MongoDB\Driver\Query($filter);
                $article = $client->executeQuery("items.items", $query);
                $doc = current($article->toArray());
                ?>

                <h1><?php echo $doc->title; ?></h1>
                <br><br>
                <img src="<?php echo $doc->image; ?>">

            </div>


            <br>


        </div>





    </body>

</html>