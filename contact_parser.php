<?php
// ********* NOT DONE ********

$filename = '/vagrant/exercises/data/contacts.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

print_r($contents);
// NTS:  THE CONTENTS ARE A SINGLE STRING WITH NEW LINE CODE

function parseContacts($contents) {
	$firstExplosion = explode('\n', $contents);
	print_r($firstExplosion) . PHP_EOL;
	$countLength = count($firstExplosion);
	print_r($countLength . " is length of firstExplosion");
	// $contentsArray = [];
	// $contentsArray = explode("|", $contents);
	// print_r($contentsArray);
	// var_dump($contentsArray);
	$arrayZero = [];
	$arrayOne = [];
	$arrayTwo = [];
	
	// foreach ($contents as $content) {
	// 	create array based on iteration
	// 	array_pop($contents) 
	// 	var_dump(expression) 
	}
parseContacts($contents);
// ****************** NOT DONE ****************

	// In class discussion, I made the mistake of exploding on pipe at first,
	// instead of the new line contained within the single string of contents.


// *** Max used a substring (substr(string, start)) to create his display
// *** Jaime used array_combine(keys, values)
// *** Isaac built a new array like this $newArray[][]; passed $key to first with "Name" second.
// *** Isaac used another function to format the phone number, passed the number and returned.
// * Try to find a way to wrap the whole thing functions and all in one function. 
// * NTS: THIS IS AN IMPORTANT EXERCISE WITH ENDLESS POSSIBILITIES FOR HOW. ****************
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
    