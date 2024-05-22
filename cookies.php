<?php
$visited = $_COOKIE['visited'] ?? 0;

$visited += 1;
setcookie('visited', $visited);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pico.classless.min.css">
    <title>PHP Cookie Example</title>
</head>

<body>
    <main>
        <h1>PHP Cookie Example</h1>
        <p>Nuber of times visited: <?php echo $visited; ?></p>
    </main>

</body>

</html>