<?php 

$filename = 'contacts.txt';

function commandPrompt ($string) {
	fwrite(STDOUT, PHP_EOL . "Select an option:" . PHP_EOL . "1. Show All Contacts" . PHP_EOL . "2. Seach for a contact" . PHP_EOL . "3. Add a contact" . PHP_EOL . "4. " . PHP_EOL);
	$optionSelected = trim(fgets(STDIN));
	if($optionSelected == 1) {
		showContacts($string);
	} else if ($optionSelected == 2) {
		searchContacts($string);
	} else if ($optionSelected == 3) {
		fwrite(STDOUT, PHP_EOL . "Contact name to add" . PHP_EOL);
		$name = trim(fgets(STDIN));
		fwrite(STDOUT, PHP_EOL . "Contact number to add" . PHP_EOL);
		$number = trim(fgets(STDIN));
		addContact($string, $name, $number);
	}
}

function openFile($string) {
	$handle = fopen($string, 'r');
	$contactsContent = trim(fread($handle, filesize($string)));
	fclose($handle);
	return $contactsContent;
}

function stringToArray($string) {
	$contactsArray = explode("\n", openFile($string));
	$contacts = [];
	foreach($contactsArray as $key => $contactInArray) {
		$contactInArray = explode("|", $contactInArray);
		$contacts[$key]['name'] = $contactInArray[0];
		$contacts[$key]['number'] = formatPhoneNumber($contactInArray[1]);
	}
	return $contacts;
}

function addContact($string, $name, $number) {
	$handle = fopen($string, 'a');
	$entry = trim($name) . "|" . trim($number);
	fwrite($handle, PHP_EOL . trim($entry));
	echo 'Contact added' . PHP_EOL;
	fclose($handle);
}

function deleteContact($string) {
	fwrite(STDOUT, PHP_EOL . "Contact to delete:" . PHP_EOL);
	$selectedName = trim(fgets(STDIN));
	foreach(stringToArray($string) as $key => $contact) {
		if($selectedName == $contact['name']) {
			unset($string[$key]);
		} 
	}
}
// 	foreach($contents as $key => $contact) {
// 		if($selectedName == $contact['name']) {
// 			unset($contents[$key]);
// 		} 
// 			$unformattedNumber = str_replace("-", "", $contact['number']);
// 			$contents[$key]['number'] = $unformattedNumber;
// 			echo $contents[$key]['number'] . PHP_EOL;
// 			$unformatted = implode("|", $contents[$key]);
// 			print_r($unformatted) . PHP_EOL;
// 			// var_dump($contents);
// 			return $contents;
// 	}
// }

function formatPhoneNumber($string) {
	$value = substr($string, 0, 3) . '-' . substr($string, 3, 3) . '-' . substr($string, 6, 4);
	return $value;
}

function showContacts($string) {
	echo "Name \t         = \tPhone Number" . PHP_EOL;
	echo "-------------------------------------" . PHP_EOL;
	foreach(stringToArray($string) as $key => $contact) {
		echo $contact['name'] . "\t = \t" . $contact['number'] . PHP_EOL;
	}
}

function searchContacts($string) {
	fwrite(STDOUT, PHP_EOL . "Search for a contact:" . PHP_EOL);
	$selectedName = trim(fgets(STDIN));
	foreach(stringToArray($string) as $key => $contact) {
		if($selectedName == $contact['name']) {
			$contactString = implode("\t = \t", $contact);
			echo $contactString . PHP_EOL;
		} 
	}
}

commandPrompt($filename);