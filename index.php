<?php
require_once 'includes/db-connect.php';
require_once 'includes/functions.php';

$sql = "select id, name from category where navigation = 1;";

$navigation = pdo_execute($pdo, $sql)->fetchAll();

$title = 'IT-News';
$description = 'All about IT and New from Software Development and Hardware';
$section = 1;
?>
<?php include './includes/header.php'; ?>
<?php include './includes/footer.php'; ?>