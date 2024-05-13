<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Verschachtelte Arrays</title>
</head>

<body>
	<?php
	$random_nums = [
		[10, 20, 155, 83, 398],
		[199, 3, 4566, 9988, 99],
		[167, 764, 9855, 7668, 1],
		[567, 5, 10, 1001, 4588],
		[999, 568, 9333, 2788, 100]
	];
	$max = PHP_INT_MIN;
	$min = PHP_INT_MAX;
	$sum = 0;
	$count = 0;

	foreach ($random_nums as $nums) {
		foreach ($nums as $num) {
			if ($num > $max) {
				$max = $num;
			}
			if ($num < $min) {
				$min = $num;
			}
			$sum += $num;
			$count++;
		}
	}
	$avg = $sum / $count;

	echo "Höchste Zahl: $max <br>";
	echo "Niedrigste Zahl: $min <br>";
	echo "Anzahl: $count <br>";
	echo "Durchschnitt: $avg <br>";

	$dividend = [
		[10, 20, 155, 83, 398],
		[199, 3, 4566, 9988, 99],
		[167, 764, 9855, 7668, 1],
		[567, 5, 10, 1001, 4588],
		[999, 568, 9333, 2788, 100]
	];
	$divisor  = [
		[2, 4, 5, 8, 10],
		[3, 6, 9, 12, 15],
		[4, 8, 12, 16, 20],
		[5, 10, 15, 20, 25],
		[6, 12, 18, 24, 30]
	];
	$division = [];
	$no_rest = [];

	for ($i = 0; $i < count($dividend); $i++) {
		for ($j = 0; $j < count($dividend[$i]); $j++) {
			$result = $dividend[$i][$j] / $divisor[$i][$j];

			$division[$i][$j] = $result;

			if ($dividend[$i][$j] % $divisor[$i][$j] == 0) {
				$no_rest[] = $result;
			}
		}
	}

	echo "Division:<pre>";
	print_r($division);
	echo "</pre>";

	echo "Zahlen ohne Rest:<pre>";
	print_r($no_rest);
	echo "</pre>";


	?>
</body>

</html>