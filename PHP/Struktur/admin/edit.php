<?php
require_once __DIR__ . "/../inc/all.php";
require_once __DIR__ . "/edit.view.php";
$imageGallery = new ImageGalleryCall($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $alt = $_POST['alt'] ? $_POST['alt'] : null;
    var_dump($alt);
    var_dump($id);
    if ($id && $alt) {
        $imageGallery->updateAltText($id, $alt);
    } else {
        $edit_error = 'Es gab ein Problem beim Editieren';
    }
    $imageId = $_POST['id'] ?? null;
    $image = $imageGallery->fetchImageById($imageId);
    renderAdmin(__DIR__ . '/views/admin.view.php', [
        'images' => $imageGallery->fetchAll(),
        'edit_error' => $edit_error ?? '',
    ]);
}
