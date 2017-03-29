<?php 
$numbers = ['12', '21', '1.22221'];

function toNumberArray($stringArray){
	foreach ($stringArray as $number) {
		$number = intval($number);
		$number = round($number, 3);
		echo $number;
	}
	return $stringArray;
}

print_r(toNumberArray($numbers));

