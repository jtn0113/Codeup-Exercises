<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_string($thing)) {
		echo "+++ $thing is a string" . PHP_EOL;
	} else if (is_null($thing)) {
		echo "+++ null" . PHP_EOL;
	} else if (is_array($thing)) {
		echo "+++ $thing is an array" . PHP_EOL;
	} else if (is_double($thing)) {
		echo "+++ $thing is a double" . PHP_EOL;
	} else if (is_bool($thing)) {
		echo "+++ boolean" . PHP_EOL;
	}
}

foreach ($things as $thing) {
	if (is_scalar($thing)) {
		echo "### $thing is a scalar" . PHP_EOL;
	}

}

foreach ($things as $thing) {
	echo "*** " . $thing . PHP_EOL;
	if (is_array($thing)) {
		foreach ($thing as $number) {
			echo "***** " . $number . PHP_EOL;
		}
	}
}