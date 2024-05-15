<?php
if (!isset($css_path)) {
    $css_path = './styles.css';
}
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $css_path ?>" type="text/css">

</head>

<body>
    <header>
        <h1>Willkommen im Zoo!</h1>
    </header>