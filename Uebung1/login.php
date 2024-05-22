<?php
include("header.php");
?>

<form action="login.php" method="post">
    <label for="username">Username
        <input type="text" name="username" placeholder="Username">
    </label>
    <label for="password">Password</label>
    <input type="submit" value="Login">
</form>