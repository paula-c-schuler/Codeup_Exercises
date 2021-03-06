<?php 
// EXERCISE 9.2.1 DONE ---   THIS FILE HOLDS THE CLASS DEFINITION
// EXERCISE 9.2.

// bring the parent class
require_once 'rectangle.php';

class Square extends Rectangle 
{
	
	public function __construct($height)
    {
    	parent::__construct($height, $height); 
	}

	public function perimeter() 
	{
		return $this->height * 4;
	}

	public function area()
    {
        return ($this->height * $this->width);
	}
}

 ?>