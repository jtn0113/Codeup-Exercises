<?php 

$nato = ['Alfa', 'Bravo', 'Charlie', 'Delta', 'Echo', 'Foxtrot', 'Golf', 'Hotel', 'India', 'Juliet', 'Kilo', 'Lima', 'November', 'Mike', 'Oscar', 'Papa', 'Quebec', 'Romeo', 'Sierra', 'Tango', 'Uniform', 'Victor', 'Whiskey', 'Xray', 'Yankee', 'Zulu'];

$words = "Hello there hoo";

function to_nato($words, $nato){
	$words = str_replace(" ", "", $words);
	$words = str_split($words);
	foreach ($words as $word) {
		if ($word == 'H') {
			$word = 'Hotel';
		}
	}
	return $words;
}

print_r(to_nato($words, $nato));