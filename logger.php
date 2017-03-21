<?php


function logMessage($logLevel, $message)
{
	$date = date('Ymd');
	$dateWithTime = date("Y-m-d H:i:s");
    $handle = fopen("log-$date.log", 'a');
    fwrite($handle, $dateWithTime . " " . $logLevel . " " . $message);
}

function logInfo() {
	logMessage("INFO", "This is an info message." . PHP_EOL);
}

function logError() {
	logMessage("ERROR", "This is an error message." . PHP_EOL);
}

logInfo();
logError();




// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 2-digit month, and 2-digit day that the log is taking place.
// If the log file for a given day does not yet exist, it should be created. If it already exists, it should be appended to.
// Newer logs should appear at the end of the log file.
// Log entries should match the format:

//   YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
// The line starts with a date and time. Next is the $logLevel, followed by the $message. Each log entry should be on its own line.

// Add logInfo() and logError() functions that call logMessage(), passing the appropriate log level values. Replace the calls to logMessage() with calls to the new functions you just created.