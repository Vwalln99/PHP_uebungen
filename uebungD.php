<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Arrays</title>
</head>

<body>
	<?php

	$zahlen = [55, 23, 12, 42, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];
	$summe = array_sum($zahlen);
	$anzahl = count($zahlen);
	$mittelwert = $summe / $anzahl;
	echo "Mittelwert: $mittelwert <br>";

	$viele_zahlen = [
		55,
		23,
		12,
		42,
		8,
		9,
		10,
		11,
		12,
		13,
		14,
		15,
		16,
		17,
		18,
		55,
		23,
		12,
		42,
		8,
		9,
		10,
		11,
		12,
		13,
		14,
		15,
		16,
		17,
		18,
		55,
		23,
		12,
		42,
		8,
		9,
		10,
		11,
		12,
		13,
		14,
		15,
		16,
		17,
		18,
		55,
		23,
		12,
		42,
		8,
		9,
		10,
		11,
		12,
		13,
		14,
		15,
		16,
		17,
		18
	];
	$count = 0;

	foreach ($viele_zahlen as $zahl) {
		if ($zahl === 8) {
			$count++;
		}
	}
	echo "Die Zahl 8 kommt $count Mal vor . <br>";


	$daten = [
		'Name'    => 'Susanne Musterfrau',
		'Alter'   => 25,
		'Beruf'   => 'Programmiererin',
		'Wohnort' => 'Musterstadt'
	];


	echo "Keys: ";
	$first = true;
	foreach ($daten as $key => $value) {
		if (!$first) {
			echo ", ";
		}
		echo $key;
		$first = false;
	}
	echo "<br>";

	echo "Values: ";
	$first = true;
	foreach ($daten as $key => $value) {
		if (!$first) {
			echo ", ";
		}
		echo $value;
		$first = false;
	}
	?>
</body>

</html>