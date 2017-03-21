<?php


function parseContacts($filename)
{
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	$contentsArray = explode("\n" , $contents);
	array_pop($contentsArray);
	// var_dump($contentsArray);
	foreach ($contentsArray as $key => $contactInArray) {
		//taking a string with contact info and exploding it into an array for each contact 
		$contactInArray = explode ("|", $contactInArray);
    	// initialize a new array to save an array for each contact
    	$contacts = array();

    	$contacts ['name'] = $contactInArray[0];

    	$contacts ['number'] = $contactInArray[1];

    	$value = substr($contacts['number'], 0, 3) . '-' . substr($contacts['number'], 3, 3) . '-' . substr($contacts['number'], 6, 4);

    	$contacts ['number'] = $value;

    	$contactInArray = $contacts;
    	
    	array_push($contentsArray, $contacts);
	}
	array_shift($contentsArray);
	array_shift($contentsArray);
	array_shift($contentsArray);
    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));


