<?php
$isbn = "9783453435773"; //ISBN von Stephen Kings "ES" zum prüfen

if (strlen($isbn) !== 13) {
    echo "Die ISBN muss genau 13 Zeichen lang sein.";
}
$pruefziffer = intval($isbn[12]);

$summe = 0;
for ($i = 0; $i < 12; $i++) {
    $summe += $isbn[$i] * (($i % 2) * 2 + 1);
}

$rest = $summe % 10;
$expectedDigit = ($rest === 0) ? 0 : (10 - $rest);

if ($pruefziffer === $expectedDigit) {
    echo "Die ISBN $isbn ist korrekt.";
} else {
    echo "Die ISBN $isbn ist nicht korrekt.";
}
