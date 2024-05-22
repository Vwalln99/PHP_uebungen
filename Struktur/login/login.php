<?php
require_once __DIR__ . "/../inc/all.php";

if ($login->logged_in) {
    header("Location: /image-gallery/image-gallery/admin/admin.php");
    exit();
}

renderLogin(__DIR__ . "/views/login.view.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST ') {
    $user_name = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($user_name === $login->login_data['username'] && $password === $login->login_data['password']) {
        $login->login();
        header('Location: /image-gallery/image-gallery/admin/admin.php');
        exit();
    } else {
        echo '<p style="color:red;">Benutzername oder Passwort falsch</p>';
    }
}
