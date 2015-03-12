<?php
//********************* THIS NEEDS REVIEW ****************
***** REVIEW INCLUDING VALUE EQUIVALENTS OF SET VALUES, NULL, EMPTY, ETC ******
//INSTRUCTOR CHANGED VARIABLE NAMES FOR CLARITY
// $nothing = ;
$null = ;
// $something = '';
$blankString = "";
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function isItSetOrEmpty ()
{
	if (isset($a) {
		return "$a is SET. ";
} 	else if (empty($a)) {
		return "$a is EMPTY. ";
}

}
// TEST: If var $null is set, display '$nothing is SET'
if 
// TEST: If var $null is empty, display '$nothing is EMPTY'
if 
// TEST: If var $blankString is set, display '$something is SET'
if 
// Serialize the array $array, and output the results
$serialDone = serialize($array);
echo $serialDone;
var_dump($serialDone);
// Unserialize the array $array, and output the results
$serialUndone = unserialize($serialDone);
echo $serialUndone;
var_dump($serialUndone);




