<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name) {
	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
	if (array_search($name, $names) !== false) {
	echo "TRUE" . PHP_EOL;
	} else {
		echo "FALSE" . PHP_EOL;
	}
}

search('Bob');

echo "-------------------------" . PHP_EOL;

$result = array_intersect($names, $compare);
print_r($result);

echo "-------------------------" . PHP_EOL;

function comparison() {
	$sameNames = 0;
	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

	foreach ($names as $name) {
		if (array_search($name, $compare) !== false) {
			$sameNames += 1;
		}
	}
	echo $sameNames . PHP_EOL;
}

comparison();





// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().