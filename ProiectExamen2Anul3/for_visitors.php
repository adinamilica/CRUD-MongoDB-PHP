

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Collection</title>
        <link rel="stylesheet" type="text/css" href="./css/collection_styles.css">
    </head>

    <body>
<?php
require_once 'connection.php';
$query = new MongoDB\Driver\Query([]);
$rows = $client->executeQuery("items.items", $query);
?>

        <div class="main-container">

            <div class="nav-container">
                <ul>
                    
                    <li><a href="for_visitors.php"><b>Collection</b></a></li>
                    <li><a href="upload.php">Upload</a><li>
                        |
                    <li><a href="dashboard.php">Dashboard</a><li>
                    <li><button class="log-in-button"><a href="log_out_user.php" class="log-in-text">Logout</a></button></li>
                </ul>
            </div>

            <div style=" display:flex; flex-direction: column; margin:auto;">

                <h1 style="margin:auto; ">Gallery</h1>
                <br><br>

                <table>
                    <tr>
                        <th>Article</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
<?php foreach ($rows as $val): ?>
    <?php if ((isset($val->title)) && (isset($val->image)) && ($val->title != "") && ($val->image != "")): ?>

                            <tr>
                                <td><?php echo $val->title; ?></td>
                                <td><img style="width:200px; height:auto;" src="<?php echo $val->image; ?>"></td>
                                <td>
                                    <button class="secondary-button"><?php echo "<a href=\"view.php?id=" . $val->_id . "\">View</a>" ?></button>
                                    <br><br>

                                    <button class="secondary-button"><?php echo "<a href=\"edit.php?id=" . $val->_id . "\">Edit</a>" ?></button>
                                    <br><br>

                                    <button class="secondary-button"><?php echo "<a href=\"delete.php?id=" . $val->_id . "\">Delete</a>" ?></button>

                                </td>

                            </tr>
    <?php endif; ?>
<?php endforeach; ?>
                </table>

            </div>


    </body>
</html>