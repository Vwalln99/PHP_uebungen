<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['title'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];

    $caller = new ProductDatabaseCaller($db);
    $caller->updateProduct($id, $title);
}

header('Location: admin.index.php');
exit();
