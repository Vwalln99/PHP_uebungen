<?php
include 'includes/database.php';
include 'includes/functions.php';
include 'includes/session.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $vote = $_POST['vote'];

    $caller = new ProductDatabaseCaller($db);

    if ($vote === 'up') {
        $caller->upvoteProduct($product_id);
    } elseif ($vote === 'down') {
        $caller->downvoteProduct($product_id);
    }
}

header('Location: index.php');
exit();
