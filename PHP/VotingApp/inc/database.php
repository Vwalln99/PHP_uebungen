<?php
$dsn = 'mysql:host=localhost;dbname=voting_app';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    echo "Verbindung erfolgreich!";
} catch (PDOException $e) {
    echo 'Verbindung fehlgeschlagen: ' . $e->getMessage();
}
