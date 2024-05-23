<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $title = $_POST['title'];
    $image = $_FILES['image'];
    $target_dir = "../img/";
    $target_file = $target_dir . basename($image['name']);

    if (move_uploaded_file($image['tmp_name'], $target_file)) {
        $caller = new ProductDatabaseCaller($db);
        $caller->addProduct($title, $image['name']);
        header('Location: admin.index.php');
        exit();
    } else {
        $error_message = 'Das Bild konnte nicht hochgeladen werden.';
    }
} else {
    $error_message = 'Es gab einen Fehler beim Hochladen des Bildes.';
}
