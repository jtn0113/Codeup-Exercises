<?php

function add($a, $b)
{
    return $a + $b;
}

echo add(2, 5) . PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}

echo subtract(10, 3) . PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply(10, 3) . PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}

echo divide(100, 5) . PHP_EOL;

function modulus($a, $b)
{
	return $a % $b;
}

echo modulus(20, 7) . PHP_EOL;
