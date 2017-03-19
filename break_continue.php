<?php 

//Shows only even numbers
for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 !== 0) {
		continue;
	}
	echo $i . PHP_EOL;
}

//Shows all numbers, breaks after 10
for ($i = 1; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i === 10) {
		break;
	}
}
