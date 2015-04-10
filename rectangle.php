<?php 
// EXERCISE 9.2.1 done  THIS FILE HOLDS THE CLASS DEFINITION


class Rectangle
{	
	
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
