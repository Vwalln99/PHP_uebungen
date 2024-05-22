<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schleifen</title>
</head>

<body>

    <?php
    // Hier beginnt die Übung

    echo "<h2>ÜbungB1</h2>";
    for ($i = 0; $i < 20; $i++) {
        echo "Ich darf nicht im Flur Skateboard fahren<br>";
    }

    echo "<h2>ÜbungB2</h2>";
    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum += $i;
    }
    echo "Die Summe der Zahlen von 1 bis 10 ist: $sum";

    echo "<h2>ÜbungB3</h2>";
    for ($i = 1000; $i >= 0; $i -= 100) {
        echo "$i<br>";
    }
    ?>

</body>

</html>