<?php
$logged_in = true;
$title = 'Welcome to Members Area';

if ($logged_in === false) {
    $title = 'Login';
    header('Location: login.php');
}
?>
<?php include('header.php');  ?>
<h1><?php echo $title; ?></h1>
<p>Members only content goes here.</p>