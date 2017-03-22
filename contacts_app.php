<?php 

$filename = 'contacts.txt';
$handle = fopen($filename, 'r');
$contactsContent = trim(fread($handle, filesize($filename)));
fclose($handle);
	
function stringToArray($contacts) {
	$contactsArray = explode("\n", $contacts);
	$contacts = [];
	foreach($contactsArray as $key => $contactInArray) {
		$contactInArray = explode("|", $contactInArray);
		$contacts[$key]['name'] = $contactInArray[0];
		$contacts[$key]['number'] = $contactInArray[1];
		$value = substr($contacts[$key]['number'], 0, 3) . '-' . substr($contacts[$key]['number'], 3, 3) . '-' . substr($contacts[$key]['number'], 6, 4);
    	$contacts[$key]['number'] = $value;
	}
	return $contacts;
	print_r($contacts);
}

function showContacts($contactsArray) {
	echo "Name \t         = \tPhone Number" . PHP_EOL;
	echo "-------------------------------------" . PHP_EOL;
	foreach($contactsArray as $key => $contact) {
		echo $contactsArray[$key]['name'] . "\t = \t" . $contactsArray[$key]['number'] . PHP_EOL;
	}
}

function searchContacts($contents, $selectedName) {
	foreach($contents as $key => $contact) {
		if($selectedName == $contact['name']) {
			$contactString = implode("\t = \t", $contact);
			print_r($contactString . PHP_EOL);
		} 
	}
}

function selectionResults($commandPrompt, $contents, $selectedName) {
	fwrite(STDOUT, PHP_EOL . $commandPrompt);
	$userSelection = trim(fgets(STDIN));
	if($userSelection == "1") {
		fwrite(STDOUT, PHP_EOL . "Search for a contact:" . PHP_EOL);
	} else if($userSelection == "2") {
		fwrite(STDOUT, PHP_EOL . "Contact to delete:" . PHP_EOL);
	}
}

function deleteContact($contents, $selectedName) {
	foreach($contents as $key => $contact) {
		if($selectedName == $contact['name']) {
			unset($contents[$key]);
		} 
			$unformattedNumber = str_replace("-", "", $contact['number']);
			$contents[$key]['number'] = $unformattedNumber;
			echo $contents[$key]['number'] . PHP_EOL;
			$unformatted = implode("|", $contents[$key]);
			print_r($unformatted) . PHP_EOL;
			// var_dump($contents);
			return $contents;
	}
}

$contents = stringToArray($contactsContent);
// var_dump($contents);
showContacts($contents);

$commandPrompt = PHP_EOL . "Select an option:" . PHP_EOL . "1. Search contacts" . PHP_EOL . "2. Delete a contact" . PHP_EOL . "3." . PHP_EOL . "4." . PHP_EOL . "5." . PHP_EOL;

selectionResults($commandPrompt);

$selectedName = trim(fgets(STDIN));
showContacts($contents);











// Create a command line application with the following features:
// Show all your contacts
// Add a new contact
// Search a contact by her name
// Delete an existing contact
// Your information should be retrieved from your file when the application starts.
// Your contacts should be saved to that same file when exiting the command line application.
// The user interface for your application must include a main menu like the following, where the user will need to enter a number between 1 and 5. ```
// View contacts.
// Add a new contact.
// Search a contact by name.
// Delete an existing contact.
// Exit. Enter an option (1, 2, 3, 4 or 5): ```
// The contacts information must be shown using the following format
