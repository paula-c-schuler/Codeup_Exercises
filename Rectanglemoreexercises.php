<?php 
// EXERCISE 9.2.1 done  THIS FILE HOLDS THE CLASS DEFINITION
// EXERCISE 9.2.2 done 
// EXERCISE 9.2.3  




class Rectanglemoreexercises
{	
	protected $height;
	protected $width;
	
	// constructor runs automatically when the class, are optionally
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
	}

    public function area()
    {
        return ($this->height * $this->width);
	}

	public function perimeter() 
	{
		return ($this->height + $this->width) * 2;
	}
}
