<?php
//*** EXERCISE COMPLETE -- WRITING TO A FILE ***
function logMessage($logLevel, $message) {
	$filedate = date('Y-m-d');
	var_dump($filedate);
    $filename = 'log-' . $filedate . '.txt';

    $dateTime = date('Y-m-d h:i:s');
	$handle = fopen($filename, 'a+');
	
    fwrite($handle, PHP_EOL . $dateTime . ' [' . $logLevel . '], ' . $message);
	fclose($handle);
}

function logInfo {
	logMessage("INFO", "This is an info message.");
}
function logError {
	logMessage("ERROR", "This is an info message.");
}
