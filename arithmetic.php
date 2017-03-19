<?php

function throwErrorMessage() {
	echo "ERROR: Both arguments must be numbers." . PHP_EOL; 
}

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
	} else {
    	throwErrorMessage();
    }
}

echo add(2, 5) . PHP_EOL;

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else {
    	throwErrorMessage();
    }
}

echo subtract(10, 3) . PHP_EOL;

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    } else {
    	throwErrorMessage();
    }
}

echo multiply(10, 2) . PHP_EOL;

function divide($a, $b)
{
	if ($b != 0) {
		if (is_numeric($a) && is_numeric($b)) {
	    	return $a / $b;
	    } else {
	    	throwErrorMessage();
	    }
	} else {
		return "You cannot divide by zero";
	}
}

echo divide(100, 10) . PHP_EOL;

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	}  else {
    	throwErrorMessage();
    }
} 

echo modulus(20, 8) . PHP_EOL;


// Refactor the error messages into their own throwErrorMessage() function, have the other functions use it for error messaging.
