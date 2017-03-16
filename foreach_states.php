<?php

$states = [
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'PR' => 'Puerto Rico',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'VI' => 'US Virgin Islands',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming'
  ];

// Show only states with 'X' in the name

echo "-----------------------" . PHP_EOL;
echo "States that contain 'X'" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

foreach ($states as $abb => $name) {
	if(strpos($name, 'x')) {
		echo "$abb - $name" . PHP_EOL;
	}
}

echo "-----------------------" . PHP_EOL;
echo "States that do not contain an 'A'" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

// Show states without an 'a' in name
foreach ($states as $abb => $name) {
	if(strpos($name, 'a') == false) {
		echo "$abb - $name" . PHP_EOL;
	}
}

echo "-----------------------" . PHP_EOL;
echo "States that begin with a vowel" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

//Show states starting with a vowel
foreach ($states as $abb => $name) {
	if ($abb[0] == 'A' || $abb[0] == 'E' || $abb[0] == 'I' || $abb[0] == 'O' || $abb[0] == 'U') {
		echo "$abb - $name" . PHP_EOL;
	}
}

echo "-----------------------" . PHP_EOL;
echo "States that contain multiple words" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

// Push multi word states into an array
$multiWordStates = [];

foreach ($states as $abb => $name) {
	if(strpos($name, ' ')) {
		array_push($multiWordStates, $name);
	}
}

//Show all the multi word states
foreach ($multiWordStates as $name) {
	echo $name . PHP_EOL;
}

echo "-----------------------" . PHP_EOL;
echo "States that contain a direction" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

// Push states with a direction into an array
$directionStates = [];
$directions = ['North', 'East', 'South', 'West']; 


foreach ($states as $abb => $name) {
	foreach ($directions as $direction) {
		if (strpos($name, $direction) !== false) {
			array_push($directionStates, $name);
		}
	}	
}

// Show all direction name states
foreach ($directionStates as $name) {
	echo $name . PHP_EOL;
}

echo "-----------------------" . PHP_EOL;
echo "States that start and end with a vowel" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

$statesStartingAndEndingWithVowels = [];

// Push states starting and ending with vowels into an array

foreach ($states as $abb => $name) {
	$firstIsVowel = ($abb[0] == 'A' || $abb[0] == 'E' || $abb[0] == 'I' || $abb[0] == 'O' || $abb[0] == 'U');
	$lastIsVowel = (substr($name, -1)) == 'a' || substr($name, -1) == 'e' || substr($name, -1) == 'i' || substr($name, -1) == 'o' || substr($name, -1) == 'u';
	if ($firstIsVowel && $lastIsVowel) {
		array_push($statesStartingAndEndingWithVowels, $name);
	}
}

// Show all states that start and end with vowels
foreach ($statesStartingAndEndingWithVowels as $name) {
	echo $name . PHP_EOL;
}










// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array


