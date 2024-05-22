<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']) && isset($_POST['title'])) {
    $product_id = $_POST['product_id'];
    $title = $_POST['title'];

    $caller = new ProductDatabaseCaller($db);
    $caller->updateProduct($product_id, $title);
}

header('Location: admin.index.php');
exit();
