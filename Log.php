<?php 

class Log {
    public $fileName;

    public function logMessage($logLevel, $message) {
        $date = date('Y-m-d');
		$dateWithTime = date("Y-m-d H:i:s");
    	$handle = fopen($this->filename, 'a');
    	fwrite($handle, $dateWithTime . " " . $logLevel . " " . $message);
    	fclose($handle);
    }

    public function info($message) {
		$this->logMessage("INFO", $message . PHP_EOL);
    }

    public function error($message) {
    	$this->logMessage("ERROR", $message . PHP_EOL);
    }
}