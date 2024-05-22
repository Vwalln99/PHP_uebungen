<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                <li><a href="/PHP/VotingApp/admin/index.php">Admin</a></li>
                <li><a href="/PHP/VotingApp/logout.php">LogOut</a></li>
            <?php else : ?>
                <li><a href="/PHP/VotingApp/login.php">LogIn</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>