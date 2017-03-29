<?php

	require_once 'Log.php';

	$logger = new Log();
	$logger->filename = "log-" . date("Y-m-d") . ".log";

	$logger->error("Something went wrong");

