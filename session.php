<?php
session_start();
$counter = $_SESSION['counter'] ?? 0;
$counter++;
$_SESSION['counter'] = $counter;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Counter</title>
</head>

<body>
    <h1>Session Counter</h1>
    <p>Seite wurde schon <?php echo $counter; ?> mal aufgerufen</p>
</body>

</html>