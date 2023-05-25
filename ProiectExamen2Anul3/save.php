<?php

require_once 'connection.php';

$msg = "";
$bulk = new MongoDB\Driver\BulkWrite;

if (isset($_POST['upload'])) {
    $target = "./images/" . basename($_FILES['image']['name']);
    $data = array(
        '_id' => new MongoDB\BSON\ObjectID(),
        'title' => $_POST['title'],
        'image' => $target,
    );

    $bulk->insert($data);
    $client->executeBulkWrite('items.items', $bulk);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('location:for_visitors.php');
    } else {
        $msg = "ERROR";
    }
}