<?php

// Aufgabe 1: Schreiben Sie eine Funktion die, die Summe aller geraden Zahlen aus dem Array $zahlen zurückgibt.
$zahlen = [23, 45, 66, 87, 199, 267, 2, 8, 89, 933];

function sum_even($array)
{
    $sum = 0;
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
        }
    }
    return $sum;
}
echo "Summe: " .  sum_even($zahlen) . "<br>";


// Aufgabe 2: Schreiben Sie eine Funktion die, einen Buch ISBN-13 Code validiert.
function validate_isbn($isbn)
{
    if (strlen($isbn) !== 13) {
        return false;
    }
    $pruefziffer = intval($isbn[12]);

    $summe = 0;
    for ($i = 0; $i < 12; $i++) {
        $summe += $isbn[$i] * (($i % 2) * 2 + 1);
    }

    $rest = $summe % 10;
    $expectedDigit = ($rest === 0) ? 0 : (10 - $rest);

    return $pruefziffer === $expectedDigit;
}

// Aufgabe 3: Schreiben Sie die Funktion get_isbn_result, die die Gültigkeit einer ISBN-13 prüft und das Ergebnis als String zurückgibt.
function get_isbn_result($isbn)
{
    if (validate_isbn($isbn)) {
        return "Gültig";
    } else {
        return "Ungültig";
    }
}

$isbn = '9783836283274';
$result = get_isbn_result($isbn);
echo "ISBN: $result <br>";

// Aufgabe 4: Schreiben Sie eine Funktion, die das Array personal_data in ein assoziatives Array umwandelt.
$personal_data = ['Max', 'Mustermann', '1970-01-01', 'Musterstraße 1', '12345', 'Musterstadt'];
function to_assoc($data)
{
    $keys = ['Vorname', 'Nachname', 'Geburtsdatum', 'Adresse', 'PLZ', 'Ort'];
    return array_combine($keys, $data);
}

var_dump(to_assoc($personal_data)) . "<br>";

// Aufgabe 5: Schreiben Sie eine Funktion, die ein Geburtsdatum erhält und die Anzahl der Tage bis zum heutigen Tag zurückgibt.
function birthdate($birthdate)
{
    $today = strtotime(date('Y-m-d'));
    $birth_date = strtotime($birthdate);
    $days = ($today - $birth_date) / (60 * 60 * 24);
    return $days;
}
$birthdate = '21.06.1999';
$days = birthdate($birthdate);
echo " <br> Tage seit Geburt: $days";



// Aufgabe 6: Schreiben Sie eine Funktion, die dem Array $students neuen Studenten hinzufügt. Die Übergabe des Arrays soll per Referenz erfolgen.
$students = [['name' => 'Susanne', 'age' => 23], ['name' => 'Max', 'age' => 25]];
function add_student(&$students, $new_student)
{
    $students[] = $new_student;
}

add_student($students, ['name' => 'Laura', 'age' => 21]);

echo "<pre>";
print_r($students);
echo "</pre>";


//Aufgabe 7: Schreiben Sie eine Funktion, die die Dateigröße eines Bildes berechnet und diese in MB zurückgibt. Die Funtkion erhält eine Auflösung als Parameter.
function calculate_imagesize($width, $height)
{
    $bytes = 3;
    $total_pixels = $width * $height;
    $total_bytes = $total_pixels * $bytes;
    $size_mb = $total_bytes / (1024 * 1024);
    return $size_mb;
}

$width = 1920;
$height = 1080;
$size_mb = calculate_imagesize($width, $height);
echo "Bildgröße: " . round($size_mb, 2) . " MB";


// optionale Aufgabe 8 (schwer): Schreiben Sie eine Funktion, die das Array $students nach dem Namen sortiert. Das Array wird auch hier als Verweis übergeben.
