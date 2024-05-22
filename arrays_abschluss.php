<?php
$components = [
	['city' => 'london'],
	['city' => 'paris'],
	['city' => 'new york'],
	['city' => 'lisbon'],
	['city' => 'tokyo']
];

$names = [
	['first' => 'peter', 'last' => 'parker'],
	['first' => 'bruce', 'last' => 'wayne'],
	['first' => 'clark', 'last' => 'kent'],
	['first' => 'diana', 'last' => 'prince'],
	['first' => 'barry', 'last' => 'allen'],
	['first' => 'hal', 'last' => 'jordan'],
	['first' => 'arthur', 'last' => 'curry'],
	['first' => 'victor', 'last' => 'stone'],
	['first' => 'wally', 'last' => 'west'],
	['first' => 'john', 'last' => 'stewart']
];

$numbers = [
	'78',
	'45',
	'23',
	'67',
	'89',
	'12',
	'56',
	'34',
	'90',
	'87',
	'65',
	'43',
	'21',
	'76',
	'98',
	'54',
	'32',
	'10',
	'9',
	'89'
];

$random_nums = "4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 99, 34, 56, 78, 90, 23, 45, 67, 89, 12, u, 56, 34, 90, 87, 65, 43, 21, 76, 98, 54, 32, 10, 9, 89";

//Aufgabe 1
$count_components = count($components);
$count_names = count($names);
$count_numbers = count($numbers);
$total_entries = $count_components + $count_names + $count_numbers;
echo "Gesamtzahl Einträge: $total_entries <br>";

//Aufgabe 2
$total_elements = count($names, COUNT_RECURSIVE);
echo "Gesamtzahl im array names: $total_elements <br>";

//Aufgabe 3
foreach ($names as &$person) {
	$random_index = array_rand($components);
	$person['city'] = $components[$random_index]['city'];
}
echo "<pre>";
print_r($names);
echo "</pre> <br>";

//Aufgabe 4
$numbers = array_map('intval', $numbers);
echo "<pre>";
print_r($numbers);
echo "</pre> <br>";

//Aufgabe 5
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre> <br>";

//Aufgabe 6
$index_of_43 = array_search(43, $numbers);
echo "Index von 43: $index_of_43 <br>";

//Aufgabe 7
$length_before = count($numbers);
array_splice($numbers, -$length_before, 10);
echo "<pre>";
print_r($numbers);
echo "</pre> <br>";

// Aufgabe 8
$cities = [];

foreach ($components as $component) {
	$city_name = $component['city'];
	if (strpos($city_name, 'l') === 0) {
		$cities[] = $city_name;
	}
}
echo "<pre>";
print_r($cities);
echo "</pre> <br>";

//Aufgabe 9
$citynames_length = [];

foreach ($components as $component) {
	$city_name = $component['city'];
	$citynames_length[$city_name] = strlen($city_name);
}
echo "<pre>";
print_r($citynames_length);
echo "</pre> <br>";

//Aufgabe 10
$city_letters = [];

foreach ($components as $component) {
	$city_name = $component['city'];
	$letters = str_split($city_name);
	$city_letters[$city_name] = $letters;
}
echo "<pre>";
print_r($city_letters);
echo "</pre> <br>";

//Aufgabe 11
$combined = [];

foreach ($numbers as $number) {
	$random_name = $names[array_rand($names)];
	$combined[$number] = [
		'first' => $random_name['first'],
		'last' => $random_name['last'],
		'city' => $components[array_rand($components)]['city']
	];
}
echo "<pre>";
print_r($combined);
echo "</pre> <br>";

//Aufgabe 12
$random_nums = str_replace(' ', '', $random_nums);
$random_nums = str_replace('u', '', $random_nums);
$numbers_array = explode(',', $random_nums);
$filtered_numbers = array_filter($numbers_array, function ($num) {
	return (int)$num > 50;
});
echo "<pre>";
print_r($filtered_numbers);
echo "</pre>";

//Aufgabe 13
$uppercase_names = array_map(function ($name) {
	return ucfirst($name['first']);
}, $names);
$name_string = implode(', ', $uppercase_names);
echo "Namen: $name_string";
