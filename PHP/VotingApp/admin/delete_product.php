<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $caller = new ProductDatabaseCaller($db);
    $caller->deleteProduct($id);
}

header('Location: admin.index.php');
exit();
