<?php
// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 // TODO: Convert the string into an array

$physicistsArray = explode(', ', $physicistsString);
$passedArray = $physicistsArray;


function humanizedList($passedArray, $sort = false) {
	//alphabetize  by first names, then do the rest 
	//additional exercise makes this optional based on second argument true
	if ($sort) {
		asort($passedArray);
	} 
	//adjusts array to add proper "and" at end of the sentence required by criteria.
	$itemRemoved = array_pop($passedArray);
	$newStringOfItems = implode(', ', $passedArray);
	$humanizedString = $newStringOfItems . ", and " . $itemRemoved . PHP_EOL;
	return $humanizedString;
} 

$sort = true;
//add second argument if want to sort alphabetically,
//call the function above, assign value to new variable for English output. 
$famousFakePhysicists = humanizedList($physicistsArray, $sort = true);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}. " . PHP_EOL;
//********** NOTE TO SELF -- RETURN is necessary to pull result from function. ****
//********** However, variable names can be crazy random. ****
//********** $famousFakePhysicists pulls the return because ****
//********* it is assigned the value of the entire function, which is the RETURN. ****
