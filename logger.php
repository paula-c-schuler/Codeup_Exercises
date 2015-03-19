<?php
//*** EXERCISE COMPLETE -- WRITING TO A FILE ***
function logMessage($logLevel, $message) {
	$fileDate = date('Y-m-d');
	$time = date('h:i:s');
	var_dump($fileDate);
    $filename = 'log-' . $fileDate . '.txt';
    
	$handle = fopen($filename, 'a+');
	
    fwrite($handle, PHP_EOL . $fileDate . ' ' . $time . ' [' . $logLevel . '], ' . $message);
	fclose($handle);
}

function logInfo {
	logMessage("INFO", "This is an info message.");
}
function logError {
	logMessage("ERROR", "This is an info message.");
}
