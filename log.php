<?php  
// *** EXERCISE 7.3 COMPLETED, WORKING ***
class Log 
{
	public $filename = '';

	public function logMessage($logLevel, $message) {
		$fileDate = date('Y-m-d');
		$time = date('h:i:s');
		// var_dump($fileDate);
	    // $filename = 'log-' . $fileDate . '.txt';
	    
		$handle = fopen($this->filename, 'a+');
		
	    fwrite($handle, PHP_EOL . $fileDate . ' ' . $time . ' [' . $logLevel . '], ' . $message);
		fclose($handle);
	}

	public function info() {
		$this->logMessage("INFO", "This is an info message.");
	}

	public function error() {
		$this->logMessage("ERROR", "This is an info message.");
	}

}

?>