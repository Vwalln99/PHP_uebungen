<?php
try {
    $dsn = 'mysql:host=localhost:3306;dbname=edvgraz_gallery';
    $username = 'edvgraz_gallery';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo 'Datenbankverbindung gescheitert: ' . $e->getMessage();
}
