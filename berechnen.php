<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berechnen</title>
</head>

<body>

    <?php

    $ust = 0.2;
    $netto = 120;
    $nettoneu = $netto * $ust;
    echo "$nettoneu <br>";
    $brutto = $netto + $nettoneu;
    echo "$brutto <br>";

    $zahl1 = 25;
    $zahl2 = 12;
    if ($zahl1 % 5 == 0) {
        echo "$zahl1 ist teilbar durch 5<br>";
    } else {
        echo "$zahl1 ist nicht durch 5 teilbar <br>";
    }
    if ($zahl2 % 5 == 0) {
        echo "$zahl2 ist durch 5 teilbar <br>";
    } else {
        echo "$zahl2 ist nicht durch 5 teilbar <br>";
    }

    $meilen = 89.98;
    $faktor = 1.609344;
    $km = $meilen * $faktor;
    echo "$km <br>";

    $celsius = 40;
    $fahrenheit = ($celsius * 9 / 5) + 32;
    echo "$celsius C = $fahrenheit F <br>";

    ?>

</body>

</html>