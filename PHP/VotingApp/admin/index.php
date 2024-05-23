<?php
include("../inc/database.php");
include("../inc/functions.php");
include("../inc/session.php");

$caller = new ProductDatabaseCaller($db);
$products = $caller->getAllProducts();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pico.classless.min.css">
    <link rel="stylesheet" href="../css/pico.css">
    <title>Products</title>
</head>

<body>
    <main>
        <?php include '../temp/header.php'; ?>
        <?php foreach ($products as $product) : ?>
            <img src="../img/<?php echo $product->filename; ?>" alt="<?php echo $product->title; ?>">
            <h2><?php echo $product->title; ?></h2>
            <p>Votes: <?php echo $product->getVotingValue(); ?></p>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                <form method="post" action="vote.php">
                    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                    <button type="submit" name="vote" value="up">Upvote</button>
                    <button type="submit" name="vote" value="down">Downvote</button>
                </form>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php include '../temp/footer.php'; ?>
    </main>

</body>

</html>