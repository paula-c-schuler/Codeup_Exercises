<?php
// ********* NOT DONE ********



function parseContacts($contentsArray) {
	$filename = '/vagrant/exercises/data/contacts.txt';
	$handle = fopen($filename, 'r');
	$contentsArray = fread($handle, filesize($filename));
	fclose($handle);


	$peopleArray = explode("\n", $contentsArray);

	function getDetailsArray ($peopleArray) {
		foreach ($peopleArray as $value) {
			$detailsArray = explode('|', $value);
		}
		applyKeys($detailsArray);
		return $detailsArray;
	}
	function applyKeys ($detailsArray) {
		$keyArray = ['Name: ', 'Phone: '];
		foreach ($detailsArray as $value) {
			$hasKeysArray = array_combine($keyArray, $detailsArray);
		}
	formatPhone($hasKeysArray);
	return $hasKeysArray;
	}
	function formatPhone($hasKeysArray) {
		foreach ($hasKeysArray as $key => $value) {
			# code...
		}

	}
	
	

	
	// foreach ($contents as $content) {
	// 	create array based on iteration
	// 	array_pop($contents) 
	// 	var_dump(expression) 
	}
parseContacts($contentsArray);
// ****************** NOT DONE ****************

// *** Jaime used array_combine(keys, values)
// *** Isaac built a new array like this $newArray[][]; passed $key to first with "Name" second.
// *** Isaac used another function to format the phone number, passed the number and returned.


// * ISAAC TIP There is a pattern sorting toolbox at www.regexr.com "Regular Expressions"

// ***  THINKING  ***
// IF    THE ORIGNINAL ARRAY RETURNS WITH ONE STRING  
// THEN  I can pop each element individually for more precision BEFORE exploding.
// Assign new name arrays to each element popped 
//     How can I automate this to scale? 
//     Can variable/array names be ++ automatically? 
//     concatenation of a name in an internal function defining the
//         new array  before populating it with the popped element? 
// Would get [1]JackBlank|1231231234, assign each to own variable 

// THEN  take variables and explode for [0]JackBlank, [1]1231231234
// THEN  assign to individual variables each one 
// THEN  process phone formatting
// THEN  create new array with keys assigned


	// *** THIS FAILED. ARRAY DID NOT FLIP values to keys
	// array_flip($contentsArray);
	// var_dump($contentsArray);

	// *** THIS FAILED, GETTING COMMA ERROR IN COMBINED ARRAY
	// $keyArray = [];
	// array_push($keyArray, 'Name: ', 'Phone: ', 'Misc');
	// var_dump($keyArray);
	// $combinedArray = [];
	// $combinedArray = ($keyArray, $contentsArray);
	// var_dump($combinedArray);	

	


// **** SAMPLE FROM STACKOVERFLOW ****
// foreach ($contents as $value) {
// $result = array();    contacts list ?
// foreach ($arrays as $array)   	
// {                       keys list ?
//     foreach ($array as $index => $data)
//     {
//         $result[$index] += $data;        
//     }
// }
    