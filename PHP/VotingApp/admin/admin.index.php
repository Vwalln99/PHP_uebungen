<?php
include '../inc/database.php';
include '../inc/functions.php';
include '../inc/session.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: ../login.php');
    exit();
}

$caller = new ProductDatabaseCaller($db);
$products = $caller->getAllProducts();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Admin Bereich</title>
    <link rel="stylesheet" href="../css/pico.classless.min.css">
</head>

<body>
    <?php include '../temp/header.php'; ?>

    <h2>Produkte verwalten</h2>
    <div class="products">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <img src="../img/<?php echo $product->filename; ?>" alt="<?php echo $product->title; ?>">
                <h2><?php echo $product->title; ?></h2>
                <form method="post" action="edit_product.php">
                    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                    <input type="text" name="title" value="<?php echo $product->title; ?>">
                    <button type="submit">Bearbeiten</button>
                </form>
                <form method="post" action="delete_product.php">
                    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                    <button type="submit">Löschen</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Neues Produkt hinzufügen</h2>
    <form method="post" action="add_product.php" enctype="multipart/form-data">
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>
        <label for="image">Bild:</label>
        <input type="file" id="image" name="image" required>
        <button type="submit">Hinzufügen</button>
    </form>

    <?php include '../temp/footer.php'; ?>
</body>

</html>