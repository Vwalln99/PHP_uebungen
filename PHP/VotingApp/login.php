<?php
include 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        $_SESSION['loggedin'] = true;
        header('Location: admin/admin.index.php');
        exit();
    } else {
        $error = "Ungültige Anmeldedaten.";
    }
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/pico.classless.min.css">
</head>

<body>
    <?php include 'temp/header.php'; ?>

    <form method="post" action="login.php">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Anmelden</button>
        <?php if (isset($error)) echo "<p style=color:red;>$error</p>"; ?>
    </form>

    <?php include 'temp/footer.php'; ?>
</body>

</html>