<?php  
// EXERCISE 7.3    COMPLETED
// EXERCISE 7.3.1  COMPLETED  CONSTRUCTORS/DESTRUCTORS
// EXERCISE 9.2.3 


class Log 
{
	protected $filename = '$prefix-YYYY-MM-DD.log';
	protected $handle;

	public function set($fileName) {
		if (!is_string($fileName)) {

		}
	}


	// constructor is first function, good practice
	public function __construct ($prefix = 'log') 

	// $prefix = 'log' is how a default is set for a function,
	// if a parameter is not actually passed for $prefix.
	{

		date_default_timezone_set('America/Chicago');
		$this->filename = $prefix . ' ' . date("Y-m-d-s") . '-.log';
		$this->handle = fopen($this->filename, 'a+');
	}


	public function logMessage($logLevel, $message) 
	{

		$fileDate = date('Y-m-d');
		$time = date('h:i:s');
		
	    
	   
		var_dump($this->handle);
	    fwrite($this->handle, PHP_EOL . $fileDate . ' ' . $time . ' [' . $logLevel . '], ' . $message);
		
	}

	

	public function info() 
	{
		$this->logMessage("INFO", "This is an info message.");
	}

	public function error() 
	{
		$this->logMessage("ERROR", "This is an info message.");
	}

	public function __destruct()
	{
		fclose($this->handle);
		echo ("This is closed.");
	}

}

?>