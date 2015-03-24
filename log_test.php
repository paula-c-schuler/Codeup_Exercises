<?php 
// *** EXERCISE 7.3 COMPLETED, WORKING ***
require_once 'Log.php';

$log = new Log();
	
// NTS: This assignment of filename applies to this
// instance of Log class only, not to any other instances.
$log->filename = 'log-YYYY-MM-DD-log.php';

echo $log->logMessage('freakyFriday', 'Howdy Friday') . PHP_EOL;
echo $log->info();
echo $log->error();
?>