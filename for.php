<?php 
fwrite(STDOUT, "Give a starting number" . PHP_EOL);
$start = trim(fgets(STDIN));

fwrite(STDOUT, "Give an ending number" . PHP_EOL);
$end = trim(fgets(STDIN));

fwrite(STDOUT, "Give a number to increment by" . PHP_EOL);
$increment = trim(fgets(STDIN));

if ($increment == "") {
	$increment = 1;
};

if (!is_numeric($start) || !is_numeric($end) || !is_numeric($increment)){
	fwrite(STDERR, "Use numbers only" . PHP_EOL);
	exit(1);
};


for ($i = $start; $i <= $end; $i += $increment) {
    echo $i . PHP_EOL;
};
