<?php


// TODO: Create your inspect() function here

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

inspect ($string1);
inspect ($string2);
inspect ($bool1);
inspect ($bool2);
inspect ($num1);
inspect ($num2);
inspect ($num3);
inspect ($num4);
inspect ($null);

// TODO: After each echo statement, use inspect() to output the variable's type and its value

// echo 'Inspecting $num1:' . PHP_EOL;

// echo 'Inspecting $num2:' . PHP_EOL;

// echo 'Inspecting $num3:' . PHP_EOL;

// echo 'Inspecting $num4:' . PHP_EOL;

// echo 'Inspecting $null:' . PHP_EOL;

// echo 'Inspecting $bool1' . PHP_EOL;

// echo 'Inspecting $bool2' . PHP_EOL;

// echo 'Inspecting $string1' . PHP_EOL;

// echo 'Inspecting $string2' . PHP_EOL;

// echo 'Inspecting $array1' . PHP_EOL;

// echo 'Inspecting $array2' . PHP_EOL;





function inspect ($inspectee) {
	$thing = gettype($inspectee);
	if (is_numeric($inspectee) && $inspectee == 0) {
		echo "The value is 0" . PHP_EOL;
	} else if ($inspectee === NULL) {
		echo "The value is NULL" . PHP_EOL;
	} else if ($inspectee == 'boolean') {
		echo "The value is a boolean" . PHP_EOL;
	} else if ($inspectee == "array") {
		echo "The value is an array" . PHP_EOL;
	} else if ($inspectee == '') {
		echo "The string is empty" . PHP_EOL;
	} else {
		echo "The $thing is $inspectee" . PHP_EOL;
	}
}

// Use your new function to inspect the given variables one at a time. Create these calls in an iterative manner: add a call to inspect() for $num1 and then test your code, add a call to inspect() for $num2 and then test your code, etc.

// There are some special cases your inpsect() function needs to handle. In particular:

// If the variable is NULL, return "The value is NULL."
// If the variable is an array, return "The value is an array"
// If the variable is an empty array, return "The value is an empty array."
// If the variable is a boolean, make sure your return value says whether it is TRUE or FALSE.
// If the variable is an empty string, return "The string is empty."