<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pico.classless.min.css">
    <title>Statistik</title>
</head>

<body>
    <main class="container">
        <header>
            <h1>Namen filtern</h1>
            <nav style="display: flex; flex-wrap: wrap">
                <?php include './includes/letters.php'; ?>
            </nav>
        </header>
        <section>
            <hr>
            <?php
            include_once './includes/functions.php';
            if (isset($_GET['char'])) {
                $first_letter = $_GET['char'] ?? '';
                echo "<h3>Namen die mit " . e($first_letter) . " beginnen</h3>";
                include './includes/filtered_names.php';
            } else {
                include './includes/instruction.php';
            }
            ?>
        </section>
    </main>
</body>

</html>