<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $vote = $_POST['vote'];

    $caller = new ProductDatabaseCaller($db);
    echo "inside vote.php";

    if ($vote === 'up') {
        echo 'up';
        $caller->upvoteProduct($id);
    } elseif ($vote === 'down') {
        echo 'down';
        $caller->downvoteProduct($id);
    }
}

header('Location: index.php');
exit();
