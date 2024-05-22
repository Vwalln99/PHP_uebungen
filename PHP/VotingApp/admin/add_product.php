<?php
include '../includes/database.php';
include '../includes/functions.php';
include '../includes/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $title = $_POST['title'];
    $image_filename = $_FILES['image']['name'];
    $target_dir = "../img/";
    $target_file = $target_dir . basename($image_filename);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $caller = new ProductDatabaseCaller($db);
        $caller->addProduct($title, $image_filename);
    }
}

header('Location: index.php');
exit();
