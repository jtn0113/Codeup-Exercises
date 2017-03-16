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
foreach ($states as $abb => $name) {
	if(strpos($name, 'x')) {
		echo "$abb - $name" . PHP_EOL;
	}
}

echo "-----------------------" . PHP_EOL;

// Show states without an 'a' in name
foreach ($states as $abb => $name) {
	if(strpos($name, 'a') == false) {
		echo "$abb - $name" . PHP_EOL;
	}
}

echo "-----------------------" . PHP_EOL;

//Show states starting with a vowel
foreach ($states as $abb => $name) {
	if ($abb[0] == 'A' || $abb[0] == 'E' || $abb[0] == 'I' || $abb[0] == 'O' || $abb[0] == 'U') {
		echo "$abb - $name" . PHP_EOL;
	}
}

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




// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"