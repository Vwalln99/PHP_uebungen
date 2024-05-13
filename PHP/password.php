
<?php
$ascii_ranges = array(
    array(48, 57),
    array(65, 90),
    array(97, 122),
    array(33, 47)
);

$password = '';

for ($i = 0; $i < 8; $i++) {
    $range_index = rand(0, count($ascii_ranges) - 1);
    $range = $ascii_ranges[$range_index];
    $ascii_value = rand($range[0], $range[1]);
    $password .= chr($ascii_value);
}

echo "Generiertes Passwort: $password";
