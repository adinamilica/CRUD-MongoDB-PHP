



<?php
require_once 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;

if (!isset($_POST['submit'])) {
    $id = new MongoDB\BSON\ObjectId($_GET['id']);
    $filter = ['_id' => $id];
    $query = new MongoDB\Driver\Query($filter);
    $article = $client->executeQuery("items.items", $query);
    $doc = current($article->toArray());
} else {
    $data = [
        'title' => $_POST['title'],
    ];
    $id = new MongoDB\BSON\ObjectId($_POST['id']);
    $filter = ['_id' => $id];

    $update = ['$set' => $data];

    $bulk->update($filter, $update);
    $client->executeBulkWrite('items.items', $bulk);
    header('location:index.php');
}
?>    

<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Upload Page </title>
        <link rel="stylesheet" type="text/css" href="./css/upload_styling.css">
    </head>
    <body>
        <div class="main-container">

            <div class="nav-container">
                <ul>

                    <li><a href="for_visitors.php">Collection</a></li>
                    <li><a href="upload.php">Upload</a><li>
                        |
                        <li><a href="dashboard.php">Dashboard</a><li>
                    <li><button class="log-in-button"><a href="log_out_user.php" class="log-in-text">Logout</a></button></li>
                </ul>
            </div>
            <div class="center-stuff-upload">
                 <a href="for_visitors.php"> < Back</a> 

                <h1>Editati inregistrarea</h1>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <input type="hidden" name="id" value="<?php echo $doc->_id; ?>">

                    Title:<br><input type="text" name="title" value="<?php echo $doc->title; ?>">
                    <br><br>

                    <input type="submit" name="submit" value="Update"><br>
                </form>


            </div>
        </div>
    </body>
</html>