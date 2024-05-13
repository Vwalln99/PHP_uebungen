<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erste PHP ausgabe</title>
</head>

<body>
    <?php echo 'Hello World <br>';
    echo 'Hello PHP <br>';

    $vorname = 'Max <br>';
    echo $vorname;

    $integer_zahl = 10;
    $double_zahl = 10.5;
    $bool_wert = true;
    $string_wert = "Hello World";
    $noch_ein_string = "67";

    echo gettype($integer_zahl) . '<br>';
    echo gettype($double_zahl) . '<br>';
    echo gettype($bool_wert) . '<br>';
    echo gettype($string_wert) . '<br>';
    echo gettype($noch_ein_string) . '<br>';

    echo var_dump($integer_zahl) . '<br>';
    echo var_dump($double_zahl) . '<br>';
    echo var_dump($bool_wert) . '<br>';
    echo var_dump($string_wert) . '<br>';
    echo var_dump($noch_ein_string) . '<br>';

    $vorname = 'John';
    $nachname = 'Doe';
    $strasse = 'Maria-Stromberger-Gasse 22';
    $plz = 8020;
    $ort = 'Graz';

    echo $vorname . ' ';
    echo $nachname . '<br>';
    echo $strasse . '<br>';
    echo $plz . ' ';
    echo $ort . '<br>';

    $a = 10;
    $b = 20;
    $ergebnis = 0;

    $a++;
    echo "$a <br>";
    $b--;
    echo "$b <br>";
    $ergebnis = $a + $b;
    echo "$ergebnis <br>";
    $ergebnis *= $a;
    echo "$ergebnis <br>";
    $rest = $a % $b;
    echo "$rest <br>";
    $exponent_erg = $a ** 2;
    echo "$exponent_erg <br>";
    $exponent_erg += $ergebnis;







    ?>
</body>

</html>