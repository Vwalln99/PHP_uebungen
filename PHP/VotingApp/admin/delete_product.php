<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $caller = new ProductDatabaseCaller($db);
    $caller->deleteProduct($product_id);
}

header('Location: admin.index.php');
exit();
