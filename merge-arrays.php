<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function search($name) {
// 	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
// 	if (array_search($name, $names) !== false) {
// 	echo "TRUE" . PHP_EOL;
// 	} else {
// 		echo "FALSE" . PHP_EOL;
// 	}
// }

// search('Bob');

// echo "-------------------------" . PHP_EOL;

// $result = array_intersect($names, $compare);
// print_r($result);

// echo "-------------------------" . PHP_EOL;

// function comparison() {
// 	$sameNames = 0;
// 	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
// 	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// 	foreach ($names as $name) {
// 		if (array_search($name, $compare) !== false) {
// 			$sameNames += 1;
// 		}
// 	}
// 	echo $sameNames . PHP_EOL;
// }

// comparison();

$newArray = [];

function combineArrays($array1, $array2, $array3) {
	foreach ($array1 as $names1) {
		if ($names1 == $array2[0]) {
			array_push($array3, $names1);
			array_shift($array2);
		} else {
			array_push($array3, $names1);
			array_push($array3, $array2[0]);
			array_shift($array2);
		}
	}
	print_r($array3) . PHP_EOL;
}

combineArrays($names, $compare, $newArray);

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().