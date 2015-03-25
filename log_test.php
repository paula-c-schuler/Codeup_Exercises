<?php 
// *** EXERCISE 7.3 COMPLETED, WORKING ***
// *** EXERCISE 7.3.1 COMPLETED CONSTRUCTORS/DECONSTRUCTORS     ***
require_once 'Log.php';

$log = new Log('cli');
	
// NTS: This assignment of filename applies to this
// instance of Log class only, not to any other instances.
// $log->filename = 'log-YYYY-MM-DD-log.php'; ACTION TRANSFERRED TO __construct IN LOG.PHP

// echo $log->logMessage() . PHP_EOL;÷
echo $log->info('All is well.');
echo $log->error();
?>